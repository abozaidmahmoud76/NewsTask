<?php

namespace App\ThirdParty\News;


class News
{
    private NewsInterface $news;

    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
    }

    public function search($q)
    {
        return $this->news->search($q);
    }

    public function get()
    {
        return $this->news->get();
    }

}
