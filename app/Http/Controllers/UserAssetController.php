<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\UserAsset;

use Laracasts\Flash\Flash;

class UserAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request)
    {
        $userAsset = new UserAsset($request->all());
        $userAsset->monthly_contributions = $request->monthly_contributions * 1.00;
        $userAsset->reason = 'Aporte Mensual';
        $userAsset->user_id = \Auth::User()->id;
        if ($userAssetC = UserAsset::find($userAsset->user_id)){
            $userAsset->accumulated = $userAssetC->accumulated + $userAsset->monthly_contributions;
            $userAsset->bloked = '0.00';
        }
        else{
            $userAsset->accumulated = $userAsset->monthly_contributions;
            $userAsset->bloked = '0.00';
           // dd($userAsset);
        }
        $userAsset->save();

        Flash::success('¡Guardado con Exito!, Gracias Por Su Aporte');

        return redirect()->route('Admin.UserAsset.index');
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
