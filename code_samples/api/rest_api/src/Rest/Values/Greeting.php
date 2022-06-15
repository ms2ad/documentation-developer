<?php

namespace App\Rest\Values;

class Greeting
{
    public $salutation;
    public $recipient;

    public function __construct($salutation = 'Hello', $recipient = 'World')
    {
        $this->salutation = $salutation;
        $this->recipient = $recipient;
    }
}
