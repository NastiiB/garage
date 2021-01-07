<?php

namespace App;

abstract class Vehicule extends Marque
{
    public string $name;
    public int $price;

    public function __construct(string $brandName, string $name, int $price)
    {
        parent::__construct($brandName);
        $this->name=$name;
        $this->price=$price;
    }

    abstract public function popularity(): string;
}