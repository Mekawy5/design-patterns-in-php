<?php

namespace Patterns\Observer\Observable;


use Patterns\Observer\Observers\ObserverInterface;

class AvailableBooks implements ObservableInterface
{
    protected $observers= [];
    public $books= [];

    /**
     * AvailableBooks constructor.
     * @param array $books
     */
    public function __construct(array $books)
    {
        foreach ($books as $book) {
            $this->books[] = $book;
        }
    }


    /**
     * @param ObserverInterface $observer
     * setter for observers.
     */
    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param ObserverInterface $observer
     */
    public function removeObserver(ObserverInterface $observer)
    {
        if (in_array($observer, $this->observers))
            unset($observer);
    }

    /**
     * loops all registered observers and update their state as the observable target
     * they observe updated.
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }


    /**
     * @param string $book
     * @param string $type
     * the main logic which after happens we notify all observers to update.
     */
    public function updateAvailableBooks($book, $type){
        if (in_array($book, $this->books) && $type === 0)
        {
            unset($book);
            $this->notify();
        }else if (!in_array($book, $this->books) && $type === 1)
        {
            $this->books[] = $book;
            $this->notify();
        }
    }
}