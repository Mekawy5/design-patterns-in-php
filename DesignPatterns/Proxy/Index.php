<?php

namespace Patterns\Proxy;

use Patterns\AbstractIndex;

class Index extends AbstractIndex
{
    /*
     * this example will explain the virtual proxy type , its about delaying doing expensive
     * process until its really needed.
     */

    function index()
    {
        $bookList = new BookListProxy();
//        var_dump($bookList);
//        as you see the expensive process not happened as we yet do need it

        $booksCount = $bookList->getBooksCount();
        echo $booksCount;
//        now the main BookList class instantiated as we needs it

        echo "\n" . $bookList->getBook(1);
    }
}