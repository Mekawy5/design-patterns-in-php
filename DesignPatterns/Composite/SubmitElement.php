<?php

namespace Patterns\Composite;

// considered as leaf
class SubmitElement implements Renderable
{

    public function render()
    {
        return '<input type="submit" value="submit">';
    }
}