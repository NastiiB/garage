<?php

namespace App;

class Sapin implements Article
{
    public string $name;
    protected string $price;

    public function __construct(string $name)
    {
        $this->name=$name;
        $this->price=$price;
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