<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use App\Services\NewsService;

class CountryController extends Controller
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
   
     /* public function index($code)
    {
        $news = $this->newsService->getNewsByCountryCode($code);
        #dd($news);
        $articles = $news->articles;
        return view('country')->with(['articles'=>$articles]);
    }*/
    
    /**
     * Get news from united states
    */

    public function unitedStates()
    {
        $news = $this->newsService->getUnitedStates();
        $articles = $news->articles;
        return view('country')->with(['articles'=>$articles]);
    }

    /**
     * Get news from united Kingdom
    */

    public function unitedKingdom()
    {
        $news = $this->newsService->getunitedKingdom();
        $articles = $news->articles;
        return view('country')->with(['articles'=>$articles]);
    }

     /**
     * Get news from Germany
    */
    public function Germany()
    {
        $news = $this->newsService->Germany();
        $articles = $news->articles;
        return view('country')->with(['articles'=>$articles]);
    }
   
    
     /**
     * Get news from Canada
    */
    public function Canada()
    {
        $news = $this->newsService->Canada();
        $articles = $news->articles;
        return view('country')->with(['articles'=>$articles]);
    }
   
    
     /**
     * Get news from Newzealand
    */
    public function Newzealand()
    {
        $news = $this->newsService->Newzealand();
        $articles = $news->articles;
        return view('country')->with(['articles'=>$articles]);
    }
   
    
    
}
