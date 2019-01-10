<?php

namespace Patterns\Decorator;


class FileLogger implements Logger
{

    public function Log($msg)
    {
        echo "$msg Logged into file . \n";
    }
}