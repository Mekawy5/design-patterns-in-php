<?php

namespace Patterns\Prototype\Prototypes;


class SecondaryStudentPrototype extends Student
{
    function __construct()
    {
        $this->level = "Secondary Level";
    }

    function __clone()
    {

    }
}