<?php


namespace App\Classes;

use App\Behaviors\BehaviorGetDate;
use App\Interfaces\HelloAndDateableInterface;

class AbstractCountry implements HelloAndDateableInterface
{
    public string $hello = 'Hello';
    public BehaviorGetDate $getDate ;

    function getDate(): string
    {
        return $this->getDate->getDate();
    }

    function getHello(): string
    {
        return $this->hello;
    }


}