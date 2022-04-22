<?php


namespace App\DesignPatterns\Structural\Decorator;


class AdvanceFeatureDecorate extends AbstractDecorator
{
    private const COST = 150.75;

    function getCost(): float
    {
        return $this->costable->getCost() + self::COST;
    }
}
