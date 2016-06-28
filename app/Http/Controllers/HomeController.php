<?php

namespace Caventel\Http\Controllers;

use Illuminate\Http\Request;

use Caventel\Http\Requests;
use PhpParser\Node\Stmt\Return_;
use Caventel\News;
use Caventel\User;

class HomeController extends Controller
{
    public function Index()
    {
        $news = News::orderBy('created_at','DESC')->paginate(4);
        return view('User.Index')->with('news', $news);
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
    
    public function News()
    {
        $news = News::orderBy('created_at','DESC')->paginate(10);
        
        return view('User.News')->with('news', $news);
    }

    public function ShowNews($id)
    {
        $news = News::find($id);
        $news->User;
        
        return view('User.ShowNews')->with('news', $news);

    }
}
