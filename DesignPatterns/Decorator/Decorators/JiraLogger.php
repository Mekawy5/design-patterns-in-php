<?php

namespace Patterns\Decorator\Decorators;


class JiraLogger extends LoggerDecorator
{

    public function Log($msg)
    {
        $this->logger->Log($msg);
        echo "Jira task created for issue : $msg";
    }
}