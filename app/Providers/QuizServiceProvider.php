<?php

namespace App\Providers;

use App\Library\Services\Quiz;
use Illuminate\Support\ServiceProvider;

class QuizServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Quiz::class, function ($app) {
            return new Quiz();
        });
    }
}
