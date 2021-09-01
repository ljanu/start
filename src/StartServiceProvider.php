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

        //register translate
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'start');

        //publishes layout
        $this->publishes([
            __DIR__ . '/resources/views/components/start'
            => resource_path('views/components/start'),
        ],
            'start-layout');

        // published index
        $this->publishes([
            __DIR__ . '/resources/views/index.blade.php'
            => resource_path('views/index.blade.php'),
        ],
            'start-index');

        // published dashboard
        $this->publishes([
            __DIR__ . '/resources/views/dashboard.blade.php'
            => resource_path('views/dashboard.blade.php'),
        ],
            'start-dashboard');


        // published css
        $this->publishes([
            __DIR__ . '/resources/css/start.css'
            => resource_path('css/start.css'),
        ],
            'start-css');

        //publish translate
        $this->publishes([
            __DIR__.'/resources/lang'
            => resource_path('lang'),
        ],
            'start-translate');

    }


    public function register()
    {

    }

}