<?php

namespace App;

class Utilitaire extends Vehicule
{
    public int $kmCount;
    public int $volume;

    public function __construct(string $brandName, string $name, int $price,int $kmCount, int $volume)
        {
            parent::__construct($brandName, $name, $price);
            $this->kmCount=$kmCount;
            $this->volume=$volume;
        }

    public function giveRate(): int
    {
        $this->price = $this->price+($this->volume*10);
        return $this->price;
    }

    public function giveDenomination(): string
    {
        return $this->brandName." ".$this->name;
    }
}