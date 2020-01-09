<?php

namespace App\Country;
use App\Behaviors\BevaviorGetDateType2;

class Tunisia
{
    function __construct(){
        $this->hello = '3aslema';
        $this->getDate = new BevaviorGetDateType2();
    }
}