<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\Http\Requests\StoreUserAssetRequest;

use Caventel\Http\Controllers\Auth\AuthController;

use Caventel\UserAsset;

use Caventel\User;

use Caventel\UserProfile;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAssetRequest $request)
    {
        $userAsset = new UserAsset($request->all());
        $userAsset->monthly_contributions = $request->monthly_contributions * 1.00;
        $userAsset->reason = 'Aporte Mensual';
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
