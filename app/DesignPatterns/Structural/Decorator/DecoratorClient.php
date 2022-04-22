<?php


namespace App\DesignPatterns\Structural\Decorator;


class DecoratorClient
{
    public function __invoke()
    {
        $obj = new AdvanceFeatureDecorate(new MediumFeatureDecorate(new BasicFeature()));
        return $obj->getCost();
    }
}

(new DecoratorClient())();
