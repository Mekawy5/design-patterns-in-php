<?php

namespace Patterns\Composite;

// considered as Composite as it consists of multible components (form/text elements)
class FormElement implements Renderable
{
    /**
     * @var Renderable[]
     */
    private $elements;

    public function render()
    {
        $formCode = '<form>';
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }
        $formCode .= '<form>';
        return $formCode;
    }

    public function addElement(Renderable $element){
        $this->elements[] = $element;
    }
}