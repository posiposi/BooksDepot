<?php

namespace Core\src\Book\UseCase\GetAllBooks;

use Core\src\Book\UseCase\Ports\GetAllBooksQueryPort;

class GetAllBooks
{
    private $port;

    public function __construct(GetAllBooksQueryPort $port)
    {
        $this->port = $port;
    }

    public function execute()
    {
        return $this->port->getAllBooks();
    }
}
