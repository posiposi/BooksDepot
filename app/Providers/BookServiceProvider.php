<?php

namespace App\Providers;

use App\Adapters\Book\GetAllBooksAdapter;
use App\Adapters\Book\RegisterBookAdapter;
use Core\src\Book\UseCase\Ports\GetAllBooksQueryPort;
use Core\src\Book\UseCase\Ports\RegisterBookCommandPort;
use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(GetAllBooksQueryPort::class, GetAllBooksAdapter::class);
        app()->bind(RegisterBookCommandPort::class, RegisterBookAdapter::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
