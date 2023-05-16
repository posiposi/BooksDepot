<?php

namespace Core\src\Book\UseCase\Ports;

interface RegisterBookCommandPort
{
    public function registerBook($request);
}