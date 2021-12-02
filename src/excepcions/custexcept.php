<?php

namespace Pereuda\lab4\excepcions;

class custexcept extends \Exception
{
    protected string $details = 'Too few arguments provided!';

    public function __construct($details) {
        $this->details = $details;
        parent::__construct();
    }

    public function __toString() {
        return $this->details;
    }

}