<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\User;
use Laracasts\Flash\Flash;

use Caventel\Http\Requests\StoreUserRequest;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::Search($request->name)->orderBy('ci','ASC')->paginate(10);

        return view('Admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users= new User($request->all());
        $users->password = bcrypt($request->password);
        $users->createdBy = $users->updatedBy = \Auth::User()->ci;
        $users->save();

        Flash::success('¡El Usuario ' . $users->name . ' Fue Registrado de Forma Exitosa!');
        //User::create($request->all());
        return redirect()->route('Admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
