<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\HeritageAsset;

use Caventel\HeritageProperty;
use Caventel\UserLoan;
use Caventel\UserAsset;
use Caventel\LoanPayment;

class HeritageTotalController extends Controller
{
    //
    public function index()
    {
        
        $totalAsset = HeritageAsset::max('accumulated');
        $totalProperty = HeritageProperty::sum('price');
        $interest = LoanPayment::sum('interest');
        $totalCapital = $totalAsset + $totalProperty + $interest;
        $retirement = HeritageAsset::sum('bloked'); 
        $userLoan = UserLoan::sum('nextamount');
        $available = $totalCapital -$retirement-$userLoan;
        

        return view('Admin.HeritageTotal.index')
            ->with('totalAsset', $totalAsset)
            ->with('totalCapital', $totalCapital)
            ->with('available', $available)
            ->with('totalProperty', $totalProperty)
            ->with('retirement', $retirement)
            ->with('userLoan', $userLoan)
            ->with('interest', $interest);

    }
}
