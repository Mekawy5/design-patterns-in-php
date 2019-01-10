<?php

namespace Patterns\Decorator\Decorators;


class SlackLogger extends LoggerDecorator
{

    public function Log($msg)
    {
        $this->logger->Log($msg);
        echo "issue : $msg Posted in slack channel :Issues";
    }
}