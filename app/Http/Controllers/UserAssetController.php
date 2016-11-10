<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;
use Caventel\Http\Requests;
use Caventel\Http\Requests\StoreUserAssetRequest;

use Caventel\Http\Controllers\Auth\AuthController;

use Caventel\UserAsset;
use Caventel\UserLoan;
use Caventel\User;
use Caventel\UserProfile;
use Caventel\PayRoll;
use Caventel\HeritageAssets;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

use Carbon\Carbon;

class UserAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  SELECT t1.* FROM user_assets t1
  JOIN (SELECT user_id, MAX(created_at) timestamp FROM user_assets GROUP BY user_id) t2 ON
  t1.user_id = t2.user_id
  AND
  t1.created_at = t2.timestamp
  ORDER BY t1.created_at DESC;
        */

        /*$userAsset = \DB::select('SELECT t1.*, t3.* FROM user_assets t1
  JOIN (SELECT user_id, MAX(created_at) timestamp FROM user_assets GROUP BY user_id) t2 ON
  t1.user_id = t2.user_id
  AND
  t1.created_at = t2.timestamp
  JOIN (SELECT * FROM users) t3 ON t1.user_id = t3.id 
  ORDER BY t1.created_at DESC');
        */

       $userAsset= UserAsset::orderBy('id', 'DESC')->groupBy('user_id')->paginate(10);
       $userAsset->each(function($userAsset){
            $userAsset->User;
        });


        return view('Admin.UserAsset.index')->with('userAssets', $userAsset);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.UserAsset.create');
    }

    public function createRetirement()
    {
        return view('Admin.UserAsset.createRetirement');
    }

    public function createM()
    {
        return view('Admin.UserAsset.createM');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAssetRequest $request)
    {
        $userAsset = new UserAsset($request->all());

        if ($userAsset->reason == 'A') {
            $userAsset->monthly_contributions = $request->monthly_contributions * 1.00;
            $userAsset->reason = 'Aporte Adicional';
            $userAsset->user_id = Auth::User()->id;
            if ((UserAsset::where('user_id', $userAsset->user_id)->count()) > 0){
                //dd('Entre en el If');
                $userAssetAc = UserAsset::where('user_id', $userAsset->user_id)->orderby('id', 'desc')->take(1)->get();
                foreach($userAssetAc as $userAssetA ){
                    $accumulated = $userAssetA->accumulated + $userAsset->monthly_contributions;
                    $bloked = '0.00';

                }


            }
            else{
                $accumulated = $userAsset->monthly_contributions;
                $bloked = '0.00';

            }
            $userAsset->accumulated = $accumulated;
            $userAsset->bloked = $bloked;
            dd($userAsset);
            $userAsset->save();

            Flash::success('¡Guardado con Exito!, Gracias Por Su Aporte');

            if (Auth::User()->type == 'user'){
                return redirect()->route('Admin.UserAsset.show', $userAsset->User->id);
            }else{
                return redirect()->route('Admin.UserAsset.index');
            }
        }elseif ($userAsset->reason == 'M') {
            $payroll = PayRoll::SELECT('salary')->WHERE('user_ci', Auth::User()->id)->get();
        foreach ($payroll as $value) {
            $userAsset->monthly_contributions =  $value->salary *($request->monthly_contributions/100)+$value->salary*0.10;
        }
            $userAsset->reason = 'Aporte Mensual';
            $userAsset->bank = $userAsset->payment = $userAsset->payment_number = 'Nomina';
            $userAsset->user_id = Auth::User()->id;
            if ((UserAsset::where('user_id', $userAsset->user_id)->count()) > 0){
                //dd('Entre en el If');
                $userAssetAc = UserAsset::where('user_id', $userAsset->user_id)->orderby('id', 'desc')->take(1)->get();
                foreach($userAssetAc as $userAssetA ){
                    $accumulated = $userAssetA->accumulated + $userAsset->monthly_contributions;
                    $bloked = '0.00';

                }


            }
            else{
                //dd('Entre en el Else');
                $accumulated = $userAsset->monthly_contributions;
                $bloked = '0.00';

            }
            $userAsset->accumulated = $accumulated;
            $userAsset->bloked = $bloked;
            $userAsset->save();

            Flash::success('¡Guardado con Exito!, Gracias Por Su Aporte');

            if (Auth::User()->type == 'user'){
                return redirect()->route('Admin.UserAsset.show', $userAsset->User->id);
            }else{
                return redirect()->route('Admin.UserAsset.index');
            }
        }else{
            Flash::error('¡ERROR!, Verifique su Información');
            return back()->withInput();
        }
    }

    public function storeRetirement(Request $request)
    {
        $user = User::SELECT('id')->WHERE('ci',$request->user_ci)->get();
        if ($user->count()) {
          foreach ($user as $value) {
              $userID = $value->id;            
          }
          $asset = UserAsset::WHERE('user_id', $userID)->ORDERBY('id','DESC')->take(1)->get();
          foreach ($asset as $value) {
            $assetID = $value->id;
            $accumulated = $value->accumulated;
          }
          $loan = UserLoan::ORDERBY('id','DESC')->take(1)->get();
          foreach ($loan as $value) {
            $nextamount = $value->nextamount;
          }
          if (true) {//$nextamount <= 0.0              
            if ($request->reason == 'total') {
                if ($request->monthly_contributions == $accumulated) {
                  $retirement = new UserAsset($request->all());
                  $retirement->reason = 'Retiro Total';
                  $retirement->user_id=$userID;
                  $retirement->accumulated= $accumulated-$retirement->monthly_contributions;
                  $retirement->save();
            
                  Flash::success('¡Guardado con Exito!, Retiro Realizado');
                  return redirect()->route('Admin.UserAsset.index');
                }else{
                  Flash::error('¡Los Retiros Totales Deben Ser Su Total Acumulado!, Verifique su Información');
                  return back()->withInput();
                }
            }elseif ($request->reason == 'partial') {
                $retirement = new UserAsset($request->all());
                $retirement->reason = 'Retiro Parcial';
                $retirement->user_id=$userID;
                $retirement->accumulated= $accumulated-$retirement->monthly_contributions;
                $retirement->save();

                Flash::success('¡Guardado con Exito!, Retiro Realizado');
                return redirect()->route('Admin.UserAsset.index');
            }else{
                Flash::error('¡ERROR!, Verifique su Información');
                return back()->withInput();
            }
          }else{
            Flash::error('¡Deuda Pendiente!, Verifique su Información');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userAsset = UserAsset::where('user_id',$id)->orderby('created_at', 'desc')->paginate(20);

        $user = User::findOrFail($id);
        //$user = User::find($id);
        $user->UserProfile;

        return view('Admin.UserAsset.show')->with('userAsset', $userAsset)->with('user', $user);

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
