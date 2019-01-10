<?php

namespace Patterns\ChainOfResponsibility\Chain;


class EnglishBookParser extends Parser
{
    protected $successor = null;

    protected function process($book)
    {
        if ($book->type == "English")
        {
            return 'English Book Parsed With EnglishBookParser';
        }
        return null;
    }

    public function setSuccessor($successor = null)
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