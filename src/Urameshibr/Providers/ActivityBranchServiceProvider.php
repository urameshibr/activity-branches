<?php

namespace Urameshibr\Providers;

use Illuminate\Support\ServiceProvider;

class ActivityBranchServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $back = DIRECTORY_SEPARATOR . '..';
        $database = __DIR__ . $back . $back . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR;
        
        $this->publishes([
            $database . 'migrations' => base_path('database/migrations'),
            $database . 'seeds' => base_path('database/seeds'),
        ]);
        
        include __DIR__ . '/../Http/routes.php';
    }
    
    public function register()
    {
        //TODO   
    }

    public function provides()
    {
        return [];
    }
}