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
        if($minutes == 2 || $minutes == 7 || $minutes == 12 || $minutes == 17 || $minutes == 22 || $minutes == 27 || $minutes == 32 || $minutes == 37 || $minutes == 42 || $minutes == 47 || $minutes == 52 || $minutes == 57 ){
            return "YY";
        }
        if($minutes == 3 || $minutes == 8 || $minutes == 13 || $minutes == 18 || $minutes == 23 || $minutes == 28 || $minutes == 33 || $minutes == 38 || $minutes == 43 || $minutes == 48 || $minutes == 53 || $minutes == 58 ){
            return "YYY";
        }
    }


}