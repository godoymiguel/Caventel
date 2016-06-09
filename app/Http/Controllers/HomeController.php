<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    public function Index()
    {
        return view('User.Index');
    }
    public function Contact() 
    {
        return view('User.Contact');
    }
    
    public function Benefit()
    {
        return view('User.Benefit');
    }

    public function Loan()
    {
        return view('User.Loan');
    }

    public function About()
    {
        return view('User.About');
    }
    
    public function Info()
    {
        return view('User.Info');
    }
    
}
