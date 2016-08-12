<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\Http\Requests\StoreHeritaAssetRequest;

use Laracasts\Flash\Flash;

use Caventel\HeritageAsset;

class HeritageAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalAsset = HeritageAsset::max('accumulated');
        $available = $totalAsset-0;
        $totalCapital = $totalAsset + 0;

        $heritageAsset = HeritageAsset::orderBy('id', 'DESC')->paginate(20);
        
        return view('Admin.HeritageAsset.index')
            ->with('heritageAssets',$heritageAsset)
            ->with('totalAsset', $totalAsset)
            ->with('totalCapital', $totalCapital)
            ->with('available', $available);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HeritageAsset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeritaAssetRequest $request)
    {
        $heritageAsset = new HeritageAsset($request->all());
        $heritageAsset->amount = $request->amount*1.00;
        if ((HeritageAsset::orderBy('id')->count()) > 0){
            //dd('Entre en el If');
            $assets = HeritageAsset::orderby('id', 'desc')->take(1)->get();
            foreach($assets as $asset ){
                $accumulated = $asset->accumulated + $heritageAsset->amount;


            }


        }
        else{
            //dd('Entre en el Else');
            $accumulated = $heritageAsset->amount;

        }
        $heritageAsset->accumulated = $accumulated;
        //dd($heritageAsset);
        $heritageAsset->save();

        Flash::success('¡Guardado con Exito!, Gracias Por Su Aporte');
        return redirect()->route('Admin.HeritageAsset.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $heritageAsset = HeritageAsset::findOrFail($id);

        return view('Admin.HeritageAsset.show')->with('heritageAsset', $heritageAsset);
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
