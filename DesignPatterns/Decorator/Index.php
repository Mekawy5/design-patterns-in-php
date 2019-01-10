<?php

namespace Patterns\Decorator;

use Patterns\AbstractIndex;
use Patterns\Decorator\Decorators\JiraLogger;
use Patterns\Decorator\Decorators\SlackLogger;

class Index extends AbstractIndex
{
    /*
     * this pattern about adding more/custom functionality to base functionality.
     * in this example the main functionality is in Log() in FileLogger which logs error
     * to file, additional functionality is to log into email,jira,slack...
     * LoggerDecorator is the decorator interface (abstract class) which injected with
     * object of Logger (main functionality to be accessed in decorator concretes) and have abstract
     * function Log() to be executed in each class .
     * in every custom class Log() you execute the main functionality then write your custom.
     */

    function index()
    {
        // create concrete component instance which contains mail behaviour
        $fileLogger = new FileLogger();

//        //create slack logger
//        $slackLogger = new SlackLogger($fileLogger);
//        $slackLogger->Log("Coinex Exchange Down .");

        //create slack logger
        $jiraLogger = new JiraLogger($fileLogger);
        $jiraLogger->Log("Coinex Exchange Down .");
    }
}