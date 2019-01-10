<?php

namespace Patterns\Singleton;


class DbConnection
{
    private static $connection;
    private $instanceId;

    private function __construct()
    {
        $this->instanceId = rand(0, 1000);
    }

    public static function getConnection(){
        if (null === static::$connection)
        {
            static::$connection = new static();
        }
        return static::$connection;
    }

}