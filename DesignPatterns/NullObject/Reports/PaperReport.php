<?php

namespace Patterns\NullObject\Reports;


class PaperReport implements ReportInterface
{

    public function create($message)
    {
        echo "Paper Report Created : $message";
    }
}