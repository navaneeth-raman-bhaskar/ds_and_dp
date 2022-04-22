<?php


namespace App\DesignPatterns\Structural\Decorator;


abstract class AbstractDecorator implements Costable
{

    public function __construct(protected Costable $costable)
    {
    }
}
