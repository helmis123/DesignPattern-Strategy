<?php
namespace App\Country;

use App\Behaviors\BevaviorGetDateType1;
use App\Classes\AbstractCountry;

class Usa extends AbstractCountry
{
    function __construct(){
        $this->hello = 'Hi!';
        $this->getDate = new BevaviorGetDateType1();
    }
}