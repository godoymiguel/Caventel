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
use Caventel\LoanPayment;
use Caventel\PayRoll;

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
        $userLoan->each(function ($userLoan) {
            $userLoan->User;
        });

        return view('Admin.UserLoan.index')->with('userLoans', $userLoan);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserLoanRequest $request)
    {
        $userLoan = new UserLoan($request->all());

        $user = User::SELECT('id', 'created_at')->WHERE('ci', $request->user_ci)->get();
        $today = Carbon::now();
        $nextMonth = Carbon::now()->addMonth();
        $userLoan->nextamount = $request->amountAwarded;
        $salary = PayRoll::SELECT('salary')->WHERE('user_ci', $request->user_ci)->get();
        foreach ($salary as $value) {
            $userLoan->salary = $value->salary*0.10;
        }
        $userLoan->amountFee =  (0.01 * $userLoan->amountAwarded)/(1-pow((1+0.01),-$userLoan->term));
        if ($user->count()) {
            foreach ($user as $user) {
                $userLoan->user_id = $user->id;
                $createdUser = $user->created_at;
                $loan = $user->UserLoan->MAX('id');
            }
            $asset = UserAsset::WHERE('user_id', $userLoan->user_id)->ORDERBY('id','DESC')->take(1)->get();
            foreach ($asset as $value) {
                $accumulated = $value->accumulated;
            }
            if ($asset) {
                if ($today->diffInDays($createdUser) > 365) {
                    $registry = UserLoan::SELECT('term','canceledFee')->WHERE('id', '=',$loan)->get();
                    foreach ($registry as $_registry){
                        $loanTerm = $_registry->term;
                        $loanFee = $_registry->canceledFee;
                    }
                    if ($userLoan->amountFee <= $userLoan->salary) {
                        if ($userLoan->typeLoan == 'personal' && $userLoan->term >= 12 && $userLoan->term <= 60) {
                            if ($userLoan->amountAwarded <= ($accumulated * 0.80)) {
                                if ($loan) {
                                    if ($loanFee >= $loanTerm) {
                                        $userLoan->dateLoan = $today;
                                        $userLoan->nextPayment = $nextMonth;
                                        
                                        $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                        $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                        $userLoan->canceledFee = 0;
                                        $userLoan->canceled = 0.0;
                                        $userLoan->overdueFees = 0.0;
                                        $userLoan->interestArrears = 0.0;
                                        $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                        $userLoan->save();

                                        Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                        return redirect()->route('Admin.UserLoan.index');
                                    } else {

                                        Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Tiene  Cuotas Pendiente ');

                                        return redirect()->route('Admin.UserLoan.index');
                                    }

                                } else {
                                    $userLoan->dateLoan = $today;
                                    $userLoan->nextPayment = $nextMonth;
                                    $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                    $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                    $userLoan->canceledFee = 0;
                                    $userLoan->canceled = 0.0;
                                    $userLoan->overdueFees = 0.0;
                                    $userLoan->interestArrears = 0.0;
                                    $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                    $userLoan->save();

                                    Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                    return redirect()->route('Admin.UserLoan.index');
                                }
                            } else {
                                Flash::error('¡El Monto del Prestamo No Puede Ser Mayor al 80% de los Haberes Acumulados!, Verifique su Información');
                                return back()->withInput();
                            }
                        }elseif ($userLoan->typeLoan == 'guarantor' && $userLoan->term >= 12 && $userLoan->term <= 60) {
                            if ($userLoan->amountAwarded <= ($accumulated * 0.80)) {
                                if ($loan) {
                                        if ($loanFee >= $loanTerm) {
                                            $userLoan->dateLoan = $today;
                                            $userLoan->nextPayment = $nextMonth;
                                            
                                            $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                            $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                            $userLoan->canceledFee = 0;
                                            $userLoan->canceled = 0.0;
                                            $userLoan->overdueFees = 0.0;
                                            $userLoan->interestArrears = 0.0;
                                            $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                            $userLoan->save();
                                            Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                            return redirect()->route('Admin.UserLoan.index');
                                        } else {
                                            Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Tiene  Cuotas Pendiente ');

                                            return redirect()->route('Admin.UserLoan.index');
                                        }
                                } else {
                                    $userLoan->dateLoan = $today;
                                    $userLoan->nextPayment = $nextMonth;
                                    $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                    $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                    $userLoan->canceledFee = 0;
                                    $userLoan->canceled = 0.0;
                                    $userLoan->overdueFees = 0.0;
                                    $userLoan->interestArrears = 0.0;
                                    $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                    $userLoan->save();
                                    Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                    return redirect()->route('Admin.UserLoan.index');
                                }
                            } else {
                                Flash::error('¡El Monto del Prestamo No Puede Ser Mayor al 80% de los Haberes Acumulados!, Verifique su Información');
                                return back()->withInput();
                            }
                        } elseif ($userLoan->typeLoan == 'vehicle' && $userLoan->term > 36 && $userLoan->term <= 60) {
                            if ($loan) {
                                if ($loanFee >= $loanTerm) {
                                    $userLoan->dateLoan = $today;
                                    $userLoan->nextPayment = $nextMonth;
                                    $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                    $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                    $userLoan->canceledFee = 0;
                                    $userLoan->canceled = 0.0;
                                    $userLoan->overdueFees = 0.0;
                                    $userLoan->interestArrears = 0.0;
                                    $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                    $userLoan->save();
                                    Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                    return redirect()->route('Admin.UserLoan.index');
                                } else {
                                    Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Tiene  Cuotas Pendiente ');

                                    return redirect()->route('Admin.UserLoan.index');
                                }
                            } else {
                                $userLoan->dateLoan = $today;
                                $userLoan->nextPayment = $nextMonth;
                                $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                $userLoan->canceledFee = 0;
                                $userLoan->canceled = 0.0;
                                $userLoan->overdueFees = 0.0;
                                $userLoan->interestArrears = 0.0;
                                $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                $userLoan->save();
                                Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                return redirect()->route('Admin.UserLoan.index');
                            }
                        }elseif ($userLoan->typeLoan == 'mortgage' && $userLoan->term >= 60 && $userLoan->term <= 300) {
                            if ($loan) {
                                if ($loanFee >= $loanTerm) {
                                    $userLoan->dateLoan = $today;
                                    $userLoan->nextPayment = $nextMonth;
                                    $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                    $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                    $userLoan->canceledFee = 0;
                                    $userLoan->canceled = 0.0;
                                    $userLoan->overdueFees = 0.0;
                                    $userLoan->interestArrears = 0.0;
                                    $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                    $userLoan->save();
                                    Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                    return redirect()->route('Admin.UserLoan.index');
                                } else {
                                    Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Tiene  Cuotas Pendiente ');

                                    return redirect()->route('Admin.UserLoan.index');
                                }
                            } else {
                                $userLoan->dateLoan = $today;
                                $userLoan->nextPayment = $nextMonth;
                                $userLoan->interest = 0.01 * $userLoan->amountAwarded;
                                $userLoan->amortization = $userLoan->amountFee - $userLoan->interest;
                                $userLoan->canceledFee = 0;
                                $userLoan->canceled = 0.0;
                                $userLoan->overdueFees = 0.0;
                                $userLoan->interestArrears = 0.0;
                                $userLoan->createdBy = $userLoan->updatedBy = \Auth::User()->ci;
                                $userLoan->save();
                                Flash::success('Nuevo Prestamo ¡Guardado con Exito!');

                                return redirect()->route('Admin.UserLoan.index');
                            }
                        } else {
                            Flash::error('¡El Tipo de Prestamo No Existe O No Tiene Un Plazo Correcto!, Verifique su Información');
                            return back()->withInput();
                        }
                    }else{
                        Flash::error('¡La cuota mensual es mayor a lo establecido!, Verifique su Información');
                        return back()->withInput();
                    }
                    

                } else {
                    Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') Debe Tener Un(1) Año de Antiguedad!, Verifique su Información');
                    return back()->withInput();
                }
            } else {
                Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') No Posee Haberes!, Verifique su Información');
                return back()->withInput();
            }
        } else {
            Flash::error('¡El Asociado con Cedula (' . $request->user_ci . ') No Esta Registrado!, Verifique su Información');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userLoan = UserLoan::where('user_id', $id)->orderby('created_at', 'desc')->paginate(10);

        $user = User::findOrFail($id);
        $user->UserProfile;

        return view('Admin.UserLoan.show')->with('userLoan', $userLoan)->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
