<?php


namespace App\Behaviors;


class BevaviorGetDateType1 extends BehaviorGetDate
{
    function getDate(): string
    {
        $date =  new \DateTime();
        $this->date = $date->format('d/m/Y');
        return $this->date;
    }
}