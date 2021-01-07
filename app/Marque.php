<?php

namespace App;

class Marque
{
    public string $brandName;

    public function __construct(string $brandName)
    {
        $this->brandName=$brandName;
    }
}