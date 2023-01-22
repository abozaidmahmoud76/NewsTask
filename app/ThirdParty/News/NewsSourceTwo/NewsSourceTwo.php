<?php

namespace App\ThirdParty\News\NewsSourceTwo;


use App\Http\Resources\NewsSourceOneResource\NewsSourceOneResource;

class NewsSourceTwo
{
    private $data;
    public function __construct()
    {
        $this->apiKey = config('NewsSourceTwo.news_api_key');
        $this->baseUrl = config('NewsSourceTwo.base_url');
    }

    private function sendRequest($url, $method = 'GET')
    {
        $url = $this->baseUrl.$url."?apiKey=$this->apiKey";
        $client = new \GuzzleHttp\Client();
        $response = $client->request($method, $url);
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200){
            return json_decode($response->getBody(), true)['results'];
        }

        abort(400,'Something went wrong');
    }

    public function search($q = null) :self
    {
        $this->data = $this->sendRequest('');
        return $this;
    }

    public function get()
    {
        return NewsSourceOneResource::collection($this->data);
    }

}
