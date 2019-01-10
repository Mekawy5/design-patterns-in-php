<?php

namespace Patterns\NullObject;


use Patterns\NullObject\Reports\ReportInterface;

class Service
{
    private $service;
    /**
     * @var ReportInterface
     */
    private $report;

    /**
     * @param $service
     * @param ReportInterface $report
     */
    public function __construct($service, ReportInterface $report){
        $this->service = $service;
        $this->report = $report;
    }

    public function execute(){
        // execute service if needed
        $this->report->create("$this->service Service was executed SUCCESSFULLY...");
    }
}