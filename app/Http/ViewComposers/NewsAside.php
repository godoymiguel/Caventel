<?php

 namespace Caventel\Http\ViewComposers;

 use Illuminate\Contracts\View\View;

 use Caventel\News;

 class NewsAside {

     public function compose(View $view)
     {
         $news_last = News::orderBy('created_at','DESC')->take(5)->get();

         $view->with('news_last',$news_last);
     }
     
 }