<?php

namespace Patterns\AbstractFactory;


class ArabicPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    /**
     * ArabicPHPBook constructor.
     */
    public function __construct()
    {
        $this->author = 'ArabicPHPBook Author';
        $this->title = 'ArabicPHPBook Title';
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