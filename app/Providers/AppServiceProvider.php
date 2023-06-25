<?php

namespace App\Providers;

use App\Models\Task;
use App\Repositories\TaskRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('TaskRepositoryInterface', 'TaskRepository');

        $this->app->bind('TaskRepositoryInterface', function(){
            return new TaskRepository(new Task());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
