<?php

namespace Patterns\ChainOfResponsibility\Chain;

abstract class Parser
{

    abstract public function setSuccessor($successor);

    abstract public function parse($book);

    abstract protected function process($book);
}