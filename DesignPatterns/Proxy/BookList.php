<?php

namespace Patterns\Proxy;


class BookList implements BookListInterface
{
    protected $books;

    /**
     * BookList constructor.
     */
    public function __construct()
    {
        /*
         * here supposed to have expensive process like looping over millions of books
         * but we will use small array for example
         */
        $books = [
            '1' => 'FirstBook',
            '2' => 'SecondBook'
        ];
        $this->books = $books;
    }

    public function getBooksCount()
    {
        return count($this->books);
    }

    public function getBook($id)
    {
        return $this->books[$id];
    }
}