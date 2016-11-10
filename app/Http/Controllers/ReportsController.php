<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\Reports;

use Laracasts\Flash\Flash;

use Carbon\Carbon;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice($id) 
    {
        $data = Reports::find($id);        
        $view =  \View::make('Admin.Reports.pdf', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->stream('invoice');
        //return $pdf->download('invoice');
    }

    public function index(Request $request)
    {
        //
        $reports = Reports::Search($request->title)->orderBy('created_at','DESC')->paginate(10);
        //dd($news);
        return view('Admin.Reports.index')->with('reports', $reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $reports = new Reports($request->all());
        $reports->createdBy = $reports->updatedBy = \Auth::User()->ci;
        //dd($reports);
        $reports->save();

        Flash::success('¡Registrado de Forma Exitosa!');
        //User::create($request->all());
        return redirect()->route('Admin.reports.index');
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
        $reports = Reports::find($id);
        return view('Admin.Reports.show')->with('reports', $reports);
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
