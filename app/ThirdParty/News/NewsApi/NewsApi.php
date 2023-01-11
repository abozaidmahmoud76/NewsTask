<?php

namespace App\ThirdParty\News\NewsApi;


class NewsApi
{
    public function __construct()
    {
        $this->apiKey = config('NewsApi.news_api_key');
        $this->baseUrl = config('NewsApi.base_url');
    }

    private function sendRequest($url, $method = 'GET')
    {
        $url = $this->baseUrl.$url."&apiKey=$this->apiKey";
        $client = new \GuzzleHttp\Client();
        $response = $client->request($method, $url);
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200){
            return json_decode($response->getBody(), true);
        }

        abort(400,'Something went wrong');
    }

    public function list($q = null)
    {
        $url = 'top-headlines?country='.config('NewsApi.country');
        $url = isset($q)? $url."&q=$q" : $url;
        return $this->sendRequest($url);
    }

}
