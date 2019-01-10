<?php

namespace Patterns\Proxy;


class BookListProxy implements BookListInterface
{
    //bookList which contains heavy process is not instantiated at construct time
    protected $bookList = null;

    public function getBooksCount()
    {
        // when this function called, its time to instantiate bookList
        if (null == $this->bookList){
            $this->bookList = new BookList();
        }
        return $this->bookList->getBooksCount();
    }

    public function getBook($id)
    {
        // when this function called, its time to instantiate bookList
        if (null == $this->bookList){
            $this->bookList = new BookList();
        }
        return $this->bookList->getBook($id);
    }
}