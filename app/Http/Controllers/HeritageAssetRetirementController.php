<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Laracasts\Flash\Flash;

use Caventel\HeritageAsset;

class HeritageAssetRetirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heritageAsset = HeritageAsset::WHERE('bloked','!=',0.0)->orderBy('id', 'DESC')->paginate(20);
        
        return view('Admin.HeritageAssetRetirement.index')
            ->with('heritageAssets',$heritageAsset);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HeritageAssetRetirement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $heritageAsset = new HeritageAsset($request->all());
        $heritageAsset->amount = $heritageAsset->bloked = $request->amount*1.00;
        //dd($heritageAsset);
        $heritageAsset->save();

        Flash::success('¡Guardado con Exito!, Retiro Realizado');
        return redirect()->route('Admin.HeritageAssetRetirement.index');
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
