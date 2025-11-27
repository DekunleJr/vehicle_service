<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            'App\Interfaces\EngineInterface',
            'App\Repository\EngineRepository'
        );
        $this->app->bind(
            'App\Interfaces\MoveInterface',
            'App\Repository\MoveRepository'
        );
        $this->app->bind(
            'App\Interfaces\PostInterface',
            'App\Repository\PostRepository'
        );
        $this->app->bind(
            'App\Interfaces\CommentInterface',
            'App\Repository\CommentRepository'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
