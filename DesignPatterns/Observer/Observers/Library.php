<?php

namespace Patterns\Observer\Observers;


use Patterns\Observer\Observable\ObservableInterface;

class Library implements ObserverInterface
{

    /*
     * class Library works as observer to the AvailableBooks(observable),
     * every change in AvailableBooks should affect this class and update it.
     */

    /**
     * @var ObservableInterface
     * in this example the observable refers the AvailableBooks.
     */
    private $observable;


    /**
     * Library constructor.
     * @param ObservableInterface $observable
     */
    public function __construct(ObservableInterface $observable)
    {
        $this->observable = $observable;
    }

    public function update()
    {
        echo " =========== This is the updated Available Books List : =========\n";
        foreach ($this->observable->books as $book){
            echo $book . "\n";
        }
    }
}