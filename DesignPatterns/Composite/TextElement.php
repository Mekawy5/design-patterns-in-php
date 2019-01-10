<?php

namespace Patterns\Composite;

// considered as leaf
class TextElement implements Renderable
{
    private $text;

    /**
     * TextElement constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }


    public function render()
    {
        return $this->text;
    }
}