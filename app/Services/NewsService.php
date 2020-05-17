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

    /*public function getNewsByCountryCode($code)
    {
       return $this->makeRequest('GET','top-headlines','country='.$code.'&apiKey='.config('services.news.api_key'));
    }*/    

    
    /**
     * Obtains all top news from United States
     * @return stdClass 
    */

    public function getUnitedStates()
    {
        return $this->makeRequest('GET','top-headlines','country=us'.'&apiKey='.config('services.news.api_key'));

    }

    
    /**
     * Obtains all top news from United States
     * @return stdClass 
    */

    public function getUnitedKingdom()
    {
        return $this->makeRequest('GET','top-headlines','country=gb'.'&apiKey='.config('services.news.api_key'));

    }

    
    public function Germany()
    {
        return $this->makeRequest('GET','top-headlines','country=gr'.'&apiKey='.config('services.news.api_key'));

    }

    /**
     * Obtains all top news from Canada
     * @return stdClass 
    */    
    public function Canada()
    {
        return $this->makeRequest('GET','top-headlines','country=ca'.'&apiKey='.config('services.news.api_key'));

    }

    
    /**
     * Obtains all top news from Newzealand
     * @return stdClass 
    */    
    public function Newzealand()
    {
        return $this->makeRequest('GET','top-headlines','country=nz'.'&apiKey='.config('services.news.api_key'));

    }






    
}

?>