<?php

namespace App\Services;

class GetNews
{
    public static function list()
    {
        $adapters = config('NewsApiAdapter.adapters');
        foreach ($adapters as $adapter){
            dd($adapter->get());
        }
    }
}
