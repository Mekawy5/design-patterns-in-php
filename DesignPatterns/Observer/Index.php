<?php

namespace Patterns\Observer;

use Patterns\AbstractIndex;
use Patterns\Observer\Observable\AvailableBooks;
use Patterns\Observer\Observers\Library;

class Index extends AbstractIndex
{
    /*
     * in this example we have observers (Library) that observe changes in observable (AvailableBooks),
     * we register observers to observable using addObserver(), also every observer should see its
     * observable (in this case its injected) to directly access the changes in observable to
     * update its state.
     * i added one observer (library) , we can add another (book store ...etc) using same structure.
     */

    function index()
    {
        // create observable
        $availableBooks = new AvailableBooks([
            'GOF design patterns',
            'Head first design patterns'
        ]);

        // create observer and inject its observable
        // (to make the library have access always to available books).
        $library = new Library($availableBooks);

        // now , assign this observer(library) to observable(Available books)
        // so whenever available books changes library updated.
        $availableBooks->addObserver($library);

        // now do some action and see if library updates after changes
        $availableBooks->updateAvailableBooks("Design patterns in php and laravel", 1);
        $availableBooks->updateAvailableBooks("Java design patterns", 0);
        // nothing happened ? check updateAvailableBooks()

        // whenever changing available books , library updated.
        $availableBooks->updateAvailableBooks("Java design patterns", 1);
    }
}