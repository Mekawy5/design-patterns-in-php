<?php

namespace Patterns\Composite;

// considered as leaf
class InputElement implements Renderable
{

    public function render()
    {
        return '<input type="text" />';
    }
}