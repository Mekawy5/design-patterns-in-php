<?php

namespace Patterns\Prototype\Prototypes;


class PrimaryStudentPrototype extends Student
{
    function __construct()
    {
        $this->level = "Primary Level";
    }

    function __clone()
    {

    }
}