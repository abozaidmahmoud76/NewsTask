<?php

namespace App\ThirdParty\News\NewsApi;


use App\Http\Resources\NewsSourceTwo\NewsSourceTwoResource;

class NewsApi
{
    private $data;

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
            return json_decode($response->getBody(), true)['articles'];
        }

        abort(400,'Something went wrong');
    }

    public function search($q = null) :self
    {
        $url = 'top-headlines?country='.config('NewsApi.country');
        $url = isset($q)? $url."&q=$q" : $url;
        $this->data = $this->sendRequest($url);
        return $this;
    }

    public function get()
    {
        return NewsSourceTwoResource::collection($this->data);
    }

}
