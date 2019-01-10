<?php

namespace Patterns\Singleton;

use Patterns\AbstractIndex;

class Index extends AbstractIndex
{

    /*
     * note that the $instanceId variable is the same in $conn, $conn2
     * as they are the same instance of the DbConnection singleton
     */

    function index()
    {
        $conn = DbConnection::getConnection();
        var_dump($conn);

        $conn2 = DbConnection::getConnection();
        var_dump($conn2);
    }
}