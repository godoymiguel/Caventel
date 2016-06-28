<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;

use Caventel\News;

use Caventel\User;

use Caventel\Http\Requests\StoreNewsRequest;

use Caventel\Http\Requests\UpdateNewsRequest;

use Laracasts\Flash\Flash;

use Carbon\Carbon;

class NewsController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = News::Search($request->title)->orderBy('created_at','DESC')->paginate(10);
        $news->each(function($news){
            $news->User;
        });
        //dd($news);
        return view('Admin.news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create news
        return view('Admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {

        if ($request->file('img')){
            $file = $request->file('img');
            $name = 'News_' . $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/news/';
            $file->move($path, $name);
        }

        $news = new News($request->all());
        $news->body = $request->body;
        $news->user_id = \Auth::User()->id;
        $news->img = $name;
        $news->save();
       // dd($news);

        Flash::success('¡La Noticia ' . $news->title . ' Fue Creada de Forma Exitosa!');

        return redirect()->route('Admin.news.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        $news->User;
        return view('Admin.news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        //dd($news);
        return view('Admin.news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, $id)
    {
        if ($request->file('img')){
            $file = $request->file('img');
            $request->img = $name = 'News_' . $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/news/';
            $file->move($path, $name);
        }


        $news = News::find($id);
        $news->fill($request->all());
        $news->save();
        //dd($news);

        Flash::warning('¡La Noticia ' . $news->title . ' Fue Modificada de Forma Exitosa!');

        return redirect()->route('Admin.news.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news= News::find($id);
        $news->delete();

        Flash::error('¡La Noticia ' . $news->title . ' Fue Borrada de Forma Exitosa!');

        return redirect()->route('Admin.news.index');
        //dd($news);
    }
}
