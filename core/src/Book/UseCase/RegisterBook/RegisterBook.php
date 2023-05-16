<?php

namespace Core\src\Book\UseCase\RegisterBook;

use Core\src\Book\UseCase\Ports\RegisterBookCommandPort;

class RegisterBook
{
    private $port;

    public function __construct(RegisterBookCommandPort $port)
    {
        $this->port = $port;
    }

    public function execute($request):void
    {
        $this->port->registerBook($request);
    }
}