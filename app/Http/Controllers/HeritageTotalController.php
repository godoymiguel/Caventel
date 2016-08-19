<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\HeritageAsset;

use Caventel\HeritageProperty;

class HeritageTotalController extends Controller
{
    //
    public function index()
    {
        $totalAsset = HeritageAsset::max('accumulated');
        $totalProperty = HeritageProperty::sum('price');
        $totalCapital = $totalAsset + $totalProperty;
        $available = $totalCapital -0;

        return view('Admin.HeritageTotal.index')
            ->with('totalAsset', $totalAsset)
            ->with('totalCapital', $totalCapital)
            ->with('available', $available)
            ->with('totalProperty', $totalProperty);

    }
}
