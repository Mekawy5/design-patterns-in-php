<?php

namespace Patterns\AbstractFactory;


class EnglishPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    /**
     * EnglishPHPBook constructor.
     */
    public function __construct()
    {
        $this->author = 'EnglishPHPBook Author';
        $this->title = 'EnglishPHPBook Title';
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