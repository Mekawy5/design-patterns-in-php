<?php

namespace Patterns\NullObject\Reports;


class DigitalReport implements ReportInterface
{

    public function create($message)
    {
        echo "Digital Report Created : $message";
    }
}