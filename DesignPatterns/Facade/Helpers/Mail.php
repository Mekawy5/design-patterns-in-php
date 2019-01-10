<?php

namespace Patterns\Facade\Helpers;


class Mail
{
    public function to($to)
    {
        return $this;
    }

    public function subject($subject)
    {
        return $this;
    }

    public function send()
    {
        return true;
    }
}