<?php

namespace App\ThirdParty\News\NewsApi;


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
    public function list($q): mixed
    {
       return $this->newsApi->list($q);
    }
}
