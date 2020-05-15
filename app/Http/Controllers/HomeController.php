<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use App\Services\NewsService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = $this->newsService->getNewsByCountry();
        #dd($news);
        $articles = $news->articles;
        return view('home')->with(['articles'=>$articles]);
    }
    
}
