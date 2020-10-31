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

    public function getSecondes($randomTime): int
    {
        $times_array = [];
        preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $randomTime, $times_array);
        return (int)$times_array[3];
    }

    public function getBottomMinutesColorValues($randomTime): string
    {
        $minutes = $this->getMinutes($randomTime);
        if ($minutes == 1 || $minutes == 6 || $minutes == 11 || $minutes == 16 || $minutes == 21 || $minutes == 26 || $minutes == 31 || $minutes == 36 || $minutes == 41 || $minutes == 46 || $minutes == 51 || $minutes == 56) {
            return "YOOO";
        } elseif ($minutes == 2 || $minutes == 7 || $minutes == 12 || $minutes == 17 || $minutes == 22 || $minutes == 27 || $minutes == 32 || $minutes == 37 || $minutes == 42 || $minutes == 47 || $minutes == 52 || $minutes == 57) {
            return "YYOO";
        } elseif ($minutes == 3 || $minutes == 8 || $minutes == 13 || $minutes == 18 || $minutes == 23 || $minutes == 28 || $minutes == 33 || $minutes == 38 || $minutes == 43 || $minutes == 48 || $minutes == 53 || $minutes == 58) {
            return "YYYO";
        } elseif ($minutes == 4 || $minutes == 9 || $minutes == 14 || $minutes == 19 || $minutes == 24 || $minutes == 29 || $minutes == 34 || $minutes == 39 || $minutes == 44 || $minutes == 49 || $minutes == 54 || $minutes == 59) {
            return "YYYY";
        } else return "OOOO";
    }

    public function getTopMinutesColorValues($randomTime)
    {
        $minutes = $this->getMinutes($randomTime);
        if ($minutes >= 5 && $minutes < 10) {
            return "YOOOOOOOOOO";
        } elseif ($minutes >= 10 && $minutes < 15) {
            return "YYOOOOOOOOO";
        } elseif ($minutes >= 15 && $minutes < 20) {
            return "YYROOOOOOOO";
        } elseif ($minutes >= 20 && $minutes < 25) {
            return "YYRYOOOOOOO";
        } elseif ($minutes >= 25 && $minutes < 30) {
            return "YYRYYOOOOOO";
        } elseif ($minutes >= 30 && $minutes < 35) {
            return "YYRYYROOOOO";
        }
    }


}