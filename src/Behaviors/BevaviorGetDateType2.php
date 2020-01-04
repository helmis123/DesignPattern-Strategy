<?php


namespace App\Behaviors;


class BevaviorGetDateType2 extends BehaviorGetDate
{
    function getDate(): string
    {
        $date =  new \DateTime();
        $this->date = $date->format('Y/m/d');
        return $this->date;
    }
}