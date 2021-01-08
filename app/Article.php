<?php

namespace App;

interface Article
{
    public function giveDenomination():string;
    public function giveRate(): int;
}