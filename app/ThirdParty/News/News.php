<?php

namespace App\ThirdParty\News;


class News
{
    private NewsInterface $news;

    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
    }

    public function list($q)
    {
        return $this->news->list($q);
    }

}
