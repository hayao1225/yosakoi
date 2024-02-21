<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();  //動画
        
        // Pagnator::useBootstrapFive();　公式ドキュメント
        // Pagnator::useBootstrapFour();　公式ドキュメント
        \URL::forceScheme('https');
        $this->app['request']->server->set('HTTPS','on');
    }
}