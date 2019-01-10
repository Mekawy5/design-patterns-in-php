<?php

namespace Patterns\AbstractFactory;


class ArabicMySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;

    /**
     * ArabicMySQLBook constructor.
     */
    public function __construct()
    {
        $this->author = 'ArabicMySQLBook Author';
        $this->title = 'ArabicMySQLBook Title';
    }

    function getAuthor()
    {
        echo $this->author;
    }

    function getTitle()
    {
        echo $this->title;
    }
}