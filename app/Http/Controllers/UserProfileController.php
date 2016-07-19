<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\UserProfile;

use Caventel\User;
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
        //dd($users);
        return view('Admin.userProfiles.create')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
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

        /*$news = new News($request->all());
        $news->body = $request->body;
        $news->user_id = \Auth::User()->id;
        $news->img = $name;
        //$news->save();

        Flash::success('¡La Noticia ' . $news->title . ' Fue Creada de Forma Exitosa!');

        return redirect()->route('Admin.news.index');
        */

        //dd($user_profiles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        $users->UserProfile;
        //$user_profiles = UserProfile::find();

        dd($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $users->UserProfile;
        //$user_profiles = UserProfile::find();

        dd($users);
        /*$news = News::find($id);

        return view('Admin.news.edit')->with('news', $news);*/
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
