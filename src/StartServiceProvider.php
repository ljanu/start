<?php
declare(strict_types=1);


namespace Tudy\Start;


use Illuminate\Support\ServiceProvider;

class StartServiceProvider extends ServiceProvider
{

    public function boot()
    {

        //register routs
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');


        //register view
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'start');

        //publishes
        $this->publishes([
            __DIR__ . 'resources/views/components/start'
            => resource_path('views/components'),
        ],
            'star-layout');

        $this->publishes([
            __DIR__ . 'resources/views/index.blade.php'
            => resource_path('views'),
        ],
            'star-index');


        $this->publishes([
            __DIR__ . 'resources/css'
            => resource_path('css'),
        ],
            'star-css');

    }


    public function register()
    {

    }

}