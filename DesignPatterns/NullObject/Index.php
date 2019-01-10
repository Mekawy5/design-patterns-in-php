<?php

namespace Patterns\NullObject;

use Patterns\AbstractIndex;
use Patterns\NullObject\Reports\DigitalReport;
use Patterns\NullObject\Reports\NullReport;
use Patterns\NullObject\Reports\PaperReport;

class Index extends AbstractIndex
{
    /*
     * in this example, the client uses Service class which receive $service and $report,
     * Service class executed $service then use the passed $report to create reports.
     * Service class will always receive $report and create it so the client decides if
     * this $service needs report so passing DigitalReport or doesn't need report so
     * passing NullReport.
     */

    function index()
    {
        // create Service needs Digital Report
        $service = new Service('Online Payment' , new DigitalReport());
        $service->execute();

//        // create Service needs Paper Report
//        $service = new Service('ATM Withdrawal' , new PaperReport());
//        $service->execute();

//        // create Service Don't need Report
//        $service = new Service('Cash Payment' , new NullReport());
//        $service->execute();
    }
}