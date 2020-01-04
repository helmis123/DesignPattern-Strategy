<?php
namespace App\Country;

use App\Behaviors\BevaviorGetDateType1;
use App\Behaviors\BevaviorGetDateType2;
use App\Classes\AbstractCountry;

class France extends AbstractCountry
{

   function __construct(){
     $this->hello = 'Salut';
       $this->getDate = new BevaviorGetDateType2();
   }
}