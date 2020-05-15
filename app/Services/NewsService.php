<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;
use App\Traits\InteractWithNewsApiResponse;


class NewsService
{

    use ConsumeExternalServices,InteractWithNewsApiResponse;
    
    /**
     * The URL to send the requests
     * @var string
     */
    protected $baseUri;
    #protected $apiKey;


   

    public function __construct()
    {
        $this->baseUri = config('services.news.base_uri');
        #$this->apikey = config('services.news.base_uri');
    }


    /**
     * Obtains all top news from Nigeria
     * @return stdClass 
    */

    public function getNewsByCountry()
    {
      
       return $this->makeRequest('GET','top-headlines','country='.config('services.news.country').'&apiKey='.config('services.news.api_key'));

    }

    
    
}

?>