<?php

namespace Caventel\Http\Controllers;

use Caventel\LoanPayment;
use Caventel\UserLoan;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Caventel\Http\Requests;
use Caventel\Http\Requests\StoreLoanPaymentRequest;
use Carbon\Carbon;

class LoanPaymentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $loanPayment = UserLoan::FindOrFail($id);
        if ($loanPayment->canceledFee >= $loanPayment->term){
            Flash::success('Credito Candelado');
            return back()->withInput();
        }else {
            return view("Admin.loanPayment.create")->with('loanPayment', $loanPayment);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanPaymentRequest $request, $id)
    {
        $loan = UserLoan::FindOrFail($id);
        $loanPayment = new LoanPayment($request->all());
        $loanPayment->user_loan_id = $id;
        $loanPayment->datePayment = $loan->nextPayment;
        $loanPayment->canceled = $loan->amountFee;
        $loanPayment->interest = $loan->interest;
        $loanPayment->amortization = $loan->amortization;
        $loanPayment->canceledFee = $loan->canceledFee + 1;
        $loanPayment->remainingFee = $loan->term - $loanPayment->canceledFee;
        $loanPayment->createdBy = $loanPayment->updatedBy = \Auth::User()->ci;;
        $loanPayment->save();

        $amountAwarded = $loan->nextamount - $loan->amortization;
        $canceled = $loan->amountAwarded - ($amountAwarded);
        $nextPayment = Carbon::parse($loanPayment->datePayment)->addMonth();

        if ($loanPayment->remainingFee != 0) {
            $amountFee = (0.01 * $amountAwarded) / (1 - pow((1 + 0.01), -$loanPayment->remainingFee));
        } else {
            $amountFee = (0.01 * $amountAwarded) / (1 - pow((1 + 0.01), -12));
        }

        $interest = 0.01 * $amountAwarded;
        $amortization = $amountFee - $interest;

        \DB::table('user_loan')->where('id',$id)
            ->update(['canceledFee' => $loanPayment->canceledFee,
                'updatedBy' => \Auth::User()->ci,
                'nextPayment' => $nextPayment,
                'canceled' => $canceled,
                'interest' => $interest,
                'amortization' => $amortization,
                'nextamount' => $amountAwarded]);

        Flash::success('Pago del Prestamo Número = ' . $loan->id . '. ¡Guardado con Exito!');

        return redirect()->route('Admin.UserLoan.show', $loan->User->id);
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
        $loanPayment = LoanPayment::Where('user_loan_id',$id)->OrderBy('id')->get();
        //dd($loanPayment);
        return view('Admin.loanPayment.show')->with('loanPayment', $loanPayment);
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
