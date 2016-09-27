<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\Http\Requests\StoreUserLoanRequest;

use Laracasts\Flash\Flash;

use Carbon\Carbon;

use Caventel\User;

use Caventel\UserLoan;

use Caventel\UserAsset;

class UserLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userLoan = UserLoan::OrderBy('id', 'desc')->paginate(20);

        return view('Admin.UserLoan.index')->with('userLoans' , $userLoan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.UserLoan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserLoanRequest $request)
    {
        $userLoan = new UserLoan($request->all());

        if (User::where('ci', $request->user_ci)->count()) {
            $user = User::where('ci', $request->user_ci)->get();
            foreach ($user as $userId) {
                $userLoan->user_id = $userId->id;
            }
            if (count($assets = UserAsset::where('user_id', $userLoan->user_id)->orderBy('created_at', 'DESC')->take(1)->get()) > 0){
                foreach ($assets as $asset) {
                    $today = Carbon::now();
                    if (($today->diffInDays($asset->created_at) > 365)) {
                        if ($userLoan->type_loan == 'personal' && $userLoan->term >= 12 && $userLoan->term <= 60) {
                            if ($userLoan->amount_awarded <= ($asset->accumulated * 0.80)) {
                                if (($registry = User::findOrFail($userLoan->user_id)->UserLoan)) {
                                    $records = UserLoan::where('user_id', $registry->user_id)->orderBy('id', 'desc')->get();
                                    foreach ($records as $record) {
                                        if ($record->amount_canceled >= $record->amount_awarded) {
                                            $userLoan->amount_canceled = 0.0;
                                            $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                            $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                            $userLoan->overdue_fees = 0.0;
                                            $userLoan->interest_arrears = 0.0;
                                            $userLoan->save();
                                            //dd($userLoan);
                                            Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                            return redirect()->route('Admin.UserLoan.index');
                                        } else {
                                            $debt = $record->amount_awarded - $record->amount_canceled;
                                            Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Posee una Deuda de: Bs' . $debt);

                                            return redirect()->route('Admin.UserLoan.index');
                                        }
                                    }
                                } else {
                                    $userLoan->amount_canceled = 0.0;
                                    $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                    $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                    $userLoan->overdue_fees = 0.0;
                                    $userLoan->interest_arrears = 0.0;
                                    $userLoan->save();

                                    Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                    return redirect()->route('Admin.UserLoan.index');
                                }
                            }else{
                                Flash::error('¡El Monto del Prestamo No Puede Ser Mayor al 80% de los Haberes Acumulados!, Verifique su Información');
                                return view('Admin.UserLoan.create');
                            }
                        }elseif ($userLoan->type_loan == 'guarantor' && $userLoan->term >= 12 && $userLoan->term <= 60){
                            if ($userLoan->amount_awarded <= ($asset->accumulated * 0.80)) {
                                if (($registry = User::findOrFail($userLoan->user_id)->UserLoan)) {
                                    $records = UserLoan::where('user_id', $registry->user_id)->orderBy('id', 'desc')->get();
                                    foreach ($records as $record) {
                                        if ($record->amount_canceled >= $record->amount_awarded) {
                                            $userLoan->amount_canceled = 0.0;
                                            $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                            $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                            $userLoan->overdue_fees = 0.0;
                                            $userLoan->interest_arrears = 0.0;
                                            $userLoan->save();
                                            //dd($userLoan);
                                            Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                            return redirect()->route('Admin.UserLoan.index');
                                        } else {
                                            $debt = $record->amount_awarded - $record->amount_canceled;
                                            Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Posee una Deuda de: Bs' . $debt);

                                            return redirect()->route('Admin.UserLoan.index');
                                        }
                                    }
                                } else {
                                    $userLoan->amount_canceled = 0.0;
                                    $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                    $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                    $userLoan->overdue_fees = 0.0;
                                    $userLoan->interest_arrears = 0.0;
                                    $userLoan->save();

                                    Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                    return redirect()->route('Admin.UserLoan.index');
                                }
                            }else{
                                Flash::error('¡El Monto del Prestamo No Puede Ser Mayor al 80% de los Haberes Acumulados!, Verifique su Información');
                                return view('Admin.UserLoan.create');
                            }
                        }elseif ($userLoan->type_loan == 'vehicle' && $userLoan->term > 36 && $userLoan->term <= 60){
                            if (($registry = User::findOrFail($userLoan->user_id)->UserLoan)) {
                                $records = UserLoan::where('user_id', $registry->user_id)->orderBy('id', 'desc')->get();
                                foreach ($records as $record) {
                                    if ($record->amount_canceled >= $record->amount_awarded) {
                                        $userLoan->amount_canceled = 0.0;
                                        $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                        $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                        $userLoan->overdue_fees = 0.0;
                                        $userLoan->interest_arrears = 0.0;
                                        $userLoan->save();
                                        //dd($userLoan);
                                        Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                        return redirect()->route('Admin.UserLoan.index');
                                    } else {
                                        $debt = $record->amount_awarded - $record->amount_canceled;
                                        Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Posee una Deuda de: Bs' . $debt);

                                        return redirect()->route('Admin.UserLoan.index');
                                    }
                                }
                            } else {
                                $userLoan->amount_canceled = 0.0;
                                $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                $userLoan->overdue_fees = 0.0;
                                $userLoan->interest_arrears = 0.0;
                                $userLoan->save();

                                Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                return redirect()->route('Admin.UserLoan.index');
                            }
                        }elseif ($userLoan->type_loan == 'mortgage' && $userLoan->term >= 60 && $userLoan->term <= 300){
                            if (($registry = User::findOrFail($userLoan->user_id)->UserLoan)) {
                                $records = UserLoan::where('user_id', $registry->user_id)->orderBy('id', 'desc')->get();
                                foreach ($records as $record) {
                                    if ($record->amount_canceled >= $record->amount_awarded) {
                                        $userLoan->amount_canceled = 0.0;
                                        $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                        $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                        $userLoan->overdue_fees = 0.0;
                                        $userLoan->interest_arrears = 0.0;
                                        $userLoan->save();
                                        //dd($userLoan);
                                        Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                        return redirect()->route('Admin.UserLoan.index');
                                    } else {
                                        $debt = $record->amount_awarded - $record->amount_canceled;
                                        Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Posee una Deuda de: Bs' . $debt);

                                        return redirect()->route('Admin.UserLoan.index');
                                    }
                                }
                            } else {
                                $userLoan->amount_canceled = 0.0;
                                $userLoan->amount_fee = $request->amount_awarded / $request->term;
                                $userLoan->amount_interest = $request->amount_awarded * 0.12;
                                $userLoan->overdue_fees = 0.0;
                                $userLoan->interest_arrears = 0.0;
                                $userLoan->save();

                                Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                return redirect()->route('Admin.UserLoan.index');
                            }
                        }else{
                            Flash::error('¡El Tipo de Prestamo No Existe O No Tiene Un Plazo Correcto!, Verifique su Información');
                            return view('Admin.UserLoan.create');
                        }
                    }else{
                        Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Debe Tener Un(1) Año de Antiguedad!, Verifique su Información');
                        return view('Admin.UserLoan.create');
                    }
                }
            }else{
                Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') No Posee Haberes!, Verifique su Información');
                return view('Admin.UserLoan.create');
            }
        }else{
            Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') No Esta Registrado!, Verifique su Información');
            return view('Admin.UserLoan.create');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
