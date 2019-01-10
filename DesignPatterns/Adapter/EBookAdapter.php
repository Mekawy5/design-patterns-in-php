<?php

namespace Patterns\Adapter;

/**
 * This is the adapter here. Notice it implements BookInterface,
 * therefore you don't have to change the code of the client which is using a Book class
 * this adapter takes the interface that the client uses (open, turnPage, getPage) and use
 * the Adapted class code (EBook Concrete).
 */

class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    private $EBook;

    /**
     * EBookAdapter constructor.
     * @param EBookInterface $EBook
     */
    public function __construct(EBookInterface $EBook)
    {
        $this->EBook = $EBook;
    }

    public function open()
    {
        $this->EBook->unlock();
    }

    public function turnPage()
    {
        $this->EBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->EBook->getSlide()[0];
    }
}