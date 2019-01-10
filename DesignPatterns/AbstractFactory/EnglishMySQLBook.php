<?php
namespace Patterns\AbstractFactory;


class EnglishMySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;

    /**
     * EnglishMySQLBook constructor.
     */
    public function __construct()
    {
        $this->author = 'EnglishMySQLBook Author';
        $this->title = 'EnglishMySQLBook Title';
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