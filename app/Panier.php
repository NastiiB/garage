<?php

namespace App;

class Panier
{
    protected array $articles;

    public function __construct(array $articles)
    {
        foreach ($articles as $article) {
            if (! $article instanceof Article) {
                throw new Exception("Le panier ne prend en compte que les articles.");
            }

        $this->articles=$articles;
    }

    public function giveBill(): array
    {
        $bill = array();
        $finalPrice = 0;

        foreach($this->articles as $article) {
            array_push($bill, $article->giveDenomination());
            $finalPrice+= $article->giveRate();
        }

        array_push($bill, $finalPrice);
        return implode(", ", $bill);
    }
}