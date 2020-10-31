<?php


class BerlinClock
{
    public function getHours($randomTime): int
    {
        $times_array = [];
        preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $randomTime, $times_array);
        return (int)$times_array[1];
    }

    public function getMinutes($randomTime): int
    {
        $times_array = [];
        preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $randomTime, $times_array);
        return (int)$times_array[2];
    }

    public function getSecondes($randomTime) : int
    {
        $times_array = [];
        preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $randomTime, $times_array);
        return (int)$times_array[3];
    }

    public function getBottomMinutesColorValues($randomTime) : string
    {
        $minutes = $this->getMinutes($randomTime);
        if($minutes == 1 || $minutes == 6 || $minutes == 11 || $minutes == 16 || $minutes == 21 || $minutes == 26 || $minutes == 31 || $minutes == 36 || $minutes == 41 || $minutes == 46 || $minutes == 51 || $minutes == 56 ){
            return "Y";
        }
    }
}