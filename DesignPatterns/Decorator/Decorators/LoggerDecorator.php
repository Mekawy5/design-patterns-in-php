<?php

namespace Patterns\Decorator\Decorators;

use Patterns\Decorator\Logger;

abstract class LoggerDecorator
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * LoggerDecorator constructor.
     * @param Logger $logger
     */
    function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    abstract public function Log($msg);
}