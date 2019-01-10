<?php

namespace Patterns\Adapter;

use Patterns\AbstractIndex;

class Index extends AbstractIndex
{

    function index()
    {
        // create eBook as the adaption destination or external package
        $kindleEBook = new Kindle();

        // create adaptor to use the adaption destination $kindleEBook with the client interface (Book)
        $book = new EBookAdapter($kindleEBook);

        $book->open(); // will use adapter to call unlock()

        $book->turnPage(); // will use adapter to call pressNext()

        echo $book->getPage(); // will use adapter to call getSlide()

    }
}