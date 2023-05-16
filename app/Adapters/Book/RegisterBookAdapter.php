<?php

namespace App\Adapters\Book;

use App\Models\Book;
use Core\src\Book\UseCase\Ports\RegisterBookCommandPort;

class RegisterBookAdapter implements RegisterBookCommandPort
{
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function registerBook($request)
    {
        return $this->book->registerBook($request);
    }
}
