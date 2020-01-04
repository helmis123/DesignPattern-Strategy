<?php
namespace App\Country;

use App\Classes\AbstractCountry;

class Usa extends AbstractCountry
{
    function __construct(){
        $this->hello = 'Hi!';
        $date = new \DateTime();
        $this->date = $date->format('d/m/Y');
    }
}