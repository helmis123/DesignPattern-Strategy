<?php


namespace App\Classes;

use App\Behaviors\BehaviorGetDate;
use App\Interfaces\HelloAndDateable;

class AbstractCountry implements HelloAndDateable
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