<?php

namespace App\Http\Controllers;
use App\Services\NewsService;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    * The market service to consume from this client
    * @var App\Services\MarketService
    */

    protected $newsService;

    public function  __construct(NewsService $newsService)
    {
     
        $this->newsService = $newsService; 

    }

}
