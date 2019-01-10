<?php

namespace Patterns\ChainOfResponsibility\Chain;


class ArabicBookParser extends Parser
{

    protected $successor;

    protected function process($book)
    {
        if ($book->type == "Arabic")
        {
            return 'Arabic Book Parsed With ArabicBookParser';
        }
        return null;
    }

    public function setSuccessor($successor)
    {
        $this->successor = $successor;
    }

    public function parse($book)
    {
        $processed = $this->process($book);
        if ($processed == null)
        {
            if ($this->successor != null)
                $processed = $this->successor->parse($book);
            else
                return "Arabic/English Parsers Supported.";
        }
        return $processed;
    }
}