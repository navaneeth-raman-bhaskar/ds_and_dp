<?php


namespace App\DesignPatterns\Structural\Decorator;


class MediumFeatureDecorate extends AbstractDecorator
{
    private const COST =  50.75;

    function getCost(): float
    {
        return $this->costable->getCost() + self::COST;
    }
}
