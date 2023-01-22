<?php

namespace App\ThirdParty\News\adapters;


use App\ThirdParty\News\NewsInterface;
use App\ThirdParty\News\NewsSourceTwo\NewsSourceTwo;

class NewsSourceTwoAdapter implements NewsInterface
{
    private NewsSourceTwo $newsSourceTwo;

    public function __construct(NewsSourceTwo $newsSourceTwo)
    {
        $this->newsSourceTwo = $newsSourceTwo;
    }


    /**
     * @param $q
     * return list of news
     * @return mixed
     */
    public function search($q): mixed
    {
       return $this->newsSourceTwo->search($q);
    }

    public function get()
    {
        return $this->newsSourceTwo->get();
    }
}
