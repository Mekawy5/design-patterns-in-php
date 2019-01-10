<?php

namespace Patterns\Proxy;


interface BookListInterface
{
    public function getBooksCount();

    public function getBook($id);
}