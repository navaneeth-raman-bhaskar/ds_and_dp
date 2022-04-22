<?php


namespace App\DesignPatterns\Structural\Decorator;


class BasicFeature implements Costable
{

    private const COST = 30.50;

    function getCost(): float
    {
        return self::COST;
    }
}
