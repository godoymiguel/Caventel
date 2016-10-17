<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\Http\Requests\StoreUserProfileRequest;

use Caventel\UserProfile;

use Caventel\User;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class UserProfileController extends Controller
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
        $users = User::find($id);
        if (!$users->UserProfile)
        {

            return view('Admin.userProfiles.create')->with('users',$users);
        }

        else
        {
            Flash::warning(Auth::user()->name . ' ¡No Puedes Crear Un Perfil Que Ya Existe!');
            return view('Admin.userProfiles.show')->with('user_profiles', $users);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProfileRequest $request, $id)
    {
        $users = User::find($id);

        if ($request->file('avatar')){
            $file = $request->file('avatar');
            $name = $users->name . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/user/';
            $file->move($path, $name);
        }else{
            $name = '1.png';
        }

        $user_profiles = new UserProfile($request->all());
        $user_profiles->avatar = $name;
        $user_profiles->user_id = $id;
        $user_profiles->save();
        
        Flash::success('¡El Perfil de ' . $users->name . ' Fue Creado de Forma Exitosa!');

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
        $user_profiles = User::find($id);
        if (!$user_profiles->UserProfile)
        {
            Flash::error('¡El Perfil de ' . $user_profiles->name . ' No Esta Completo!, Debe Crearlo Para ver su Información');
            return view('Admin.userProfiles.create')->with('users', $user_profiles);
        }

        else
        {
            return view('Admin.userProfiles.show')->with('user_profiles', $user_profiles);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_profiles = User::find($id);
        if (!$user_profiles->UserProfile)
        {
            Flash::error('¡El Perfil de ' . $user_profiles->name . ' No Esta Completo!, Debe Crearlo Para Editar su Información');
            return view('Admin.userProfiles.create')->with('users', $user_profiles);
        }

        else
        {
            return view('Admin.userProfiles.edit')->with('user_profiles', $user_profiles);
        }


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
        dd($request);
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
