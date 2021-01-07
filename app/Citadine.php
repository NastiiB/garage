<?php

namespace App;

class Citadine extends Voiture
{
    public function __construct(string $brandName, string $name, int $price,int $kmCount, int $constructionYear)
    {
        parent::__construct($brandName, $name, $price, $kmCount, $constructionYear);
    }
}