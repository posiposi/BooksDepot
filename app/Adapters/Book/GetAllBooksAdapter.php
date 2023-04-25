<?php

namespace App\Adapters\Book;

use App\Models\Book as EloquentBook;
use Core\src\Book\Domain\Model\Book as DomainBook;
use Core\src\Book\UseCase\Ports\GetAllBooksQueryPort;

class GetAllBooksAdapter implements GetAllBooksQueryPort
{
    private $eloquentBook;
    private $domainBook;

    public function __construct(EloquentBook $eloquentBook, DomainBook $domainBook)
    {
        $this->eloquentBook = $eloquentBook;
        $this->domainBook = $domainBook;
    }

    public function getAllBooks()
    {
        return $this->eloquentBook->findAll();
    }
}
