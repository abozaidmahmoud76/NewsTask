<?php

namespace App\ThirdParty\News\adapters;


use App\ThirdParty\News\NewsApi\NewsApi;
use App\ThirdParty\News\NewsInterface;

class NewsApiAdapter implements NewsInterface
{
    private NewsApi $newsApi;

    public function __construct(NewsApi $newsApi)
    {
        $this->newsApi = $newsApi;
    }


    /**
     * @param $q
     * return list of news
     * @return mixed
     */
    public function search($q): mixed
    {
       return $this->newsApi->search($q);
    }
    public function get()
    {
        return $this->get();
    }

}
