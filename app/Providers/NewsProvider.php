<?php

namespace App\Providers;

use App\ThirdParty\News\adapters\NewsApiAdapter;
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
//        $this->app->bind(NewsInterface::class, NewsSourceTwoAdapter::class);

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
