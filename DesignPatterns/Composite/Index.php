<?php

namespace Patterns\Composite;


use Patterns\AbstractIndex;

class Index extends AbstractIndex
{

    function index()
    {
        // create composite and add some leaf components to it
        $form = new FormElement();
        $form->addElement(new TextElement('Email'));
        $form->addElement(new InputElement());
        $form->addElement(new TextElement('Password'));
        $form->addElement(new InputElement());
        $form->addElement(new SubmitElement());

        // execute behaviour (render) on the composite
        echo $form->render();
    }
}