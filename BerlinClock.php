<?php


class BerlinClock
{
    public function getHours($randomTime) :int
    {
        $hours = [];
        preg_match("/[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}/", $randomTime, $hours);
        return (int)$hours[0];
    }
}