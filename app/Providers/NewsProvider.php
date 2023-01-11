<?php

namespace App\Providers;

use App\ThirdParty\News\NewsApi\NewsApiAdapter;
use App\ThirdParty\News\NewsInterface;
use Illuminate\Support\ServiceProvider;

class NewsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsInterface::class, NewsApiAdapter::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
