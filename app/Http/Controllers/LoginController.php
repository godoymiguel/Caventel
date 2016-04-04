<?php namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

class LoginController extends Controller
{
  /*  public function __construct()
    {
        $this->middleware('auth');
    }
*/
    public function SingIn()
    {
        return view('auth.login');
    }
}
