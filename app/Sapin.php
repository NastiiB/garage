<?php

namespace App;

class Sapin implements Article
{
    public string $name;
    protected int $price = 5;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

    public function giveDenomination(): string
    {
        return $this->name;
    }

    public function giveRate(): int
    {
        return $this->price;
    }
}