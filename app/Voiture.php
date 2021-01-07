<?php

namespace App;

class Voiture extends Vehicule
{
    public int $kmCount;
    protected int $constructionYear;

    public function __construct(string $brandName, string $name, int $price,int $kmCount, int $constructionYear)
    {
        parent::__construct($brandName, $name, $price);
        $this->kmCount=$kmCount;
        $this->constructionYear=$constructionYear;
    }

    public function giveUsury(): int
    {
        $usury = $this->kmCount*$this->constructionYear;
        return $usury;
    }

    public function giveRate(): int
    {
        $this->price = $this->price/giveUsury();
        return $this->price;
    }

    public function giveDenomination(): string
    {
        return $this->brandName." ".$this->name;
    }

    public function popularity(): string
    {
        if($this->constructionYear > 2010) {
            $popularity = "Populaire";
        } else {
            $popularity = "Impopulaire";
        }

        return $popularity;
    }
}
