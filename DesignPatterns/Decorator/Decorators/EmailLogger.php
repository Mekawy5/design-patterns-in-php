<?php

namespace Patterns\Decorator\Decorators;


class EmailLogger extends LoggerDecorator
{

    public function Log($msg)
    {
        $this->logger->Log($msg);
        echo "Email sent with msg : $msg";
    }
}