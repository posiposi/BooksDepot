<?php

namespace App\Providers;

use App\Adapters\Book\GetAllBooksAdapter;
use Core\src\Book\UseCase\Ports\GetAllBooksQueryPort;
use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(GetAllBooksQueryPort::class, GetAllBooksAdapter::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
