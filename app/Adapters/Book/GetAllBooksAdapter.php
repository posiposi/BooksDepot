<?php

namespace App\Adapters\Book;

use App\Models\Book as EloquentBook;
use Core\src\Book\UseCase\Ports\GetAllBooksQueryPort;

class GetAllBooksAdapter implements GetAllBooksQueryPort
{
    private $eloquentBook;

    public function __construct(EloquentBook $eloquentBook)
    {
        $this->eloquentBook = $eloquentBook;
    }

    public function getAllBooks()
    {
        return $this->eloquentBook->findAll();
    }
}
