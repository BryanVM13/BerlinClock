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
        } elseif ($minutes >= 35 && $minutes < 40) {
            return "YYRYYRYOOOO";
        } elseif ($minutes >= 40 && $minutes < 45) {
            return "YYRYYRYYOOO";
        } elseif ($minutes >= 45 && $minutes < 50) {
            return "YYRYYRYYROO";
        } elseif ($minutes >= 50 && $minutes < 55) {
            return "YYRYYRYYRYO";
        } elseif ($minutes >= 55 && $minutes < 60) {
            return "YYRYYRYYRYY";
        } else {
            return "OOOOOOOOOOO";
        }
    }

    public function getBottomHoursColorValues(string $time)
    {
        $hours = $this->getHours($time);
        if ($hours == 1 || $hours == 6 || $hours == 11 || $hours == 16 || $hours == 21) {
            return "ROOO";
        } elseif ($hours == 2 || $hours == 7 || $hours == 12 || $hours == 17 || $hours == 22) {
            return "RROO";
        } elseif ($hours == 3 || $hours == 8 || $hours == 13 || $hours == 18 || $hours == 23) {
            return "RRRO";
        } elseif ($hours == 4 || $hours == 9 || $hours == 14 || $hours == 19) {
            return "RRRR";
        } else {
            return "OOOO";
        }

    }

    public function getTopHoursColorValues(string $time)
    {
        $hours = $this->getHours($time);
        if ($hours >= 5 && $hours < 10) {
            return "ROOO";
        } elseif ($hours >= 10 && $hours < 15) {
            return "RROO";
        } elseif ($hours >= 15 && $hours < 20) {
            return "RRRO";
        } elseif ($hours >= 20 && $hours < 24) {
            return "RRRR";
        } else {
            return "OOOO";
        }
    }

    public function getSecondesColorValues(string $time)
    {
        $secondes = $this->getSecondes($time);
        if ($secondes % 2 == 0) {
            return "Y";
        }
        return "O";
    }

    /**
     * @return array [currentTime, colorValues (bottomMinutes, topMinutes, bottomHours, topHours, seconds)
     */
    public function callCurrentTime(): array
    {
        $currentTime = date("H:i:s");
        $bottomMinutes = $this->getBottomMinutesColorValues($currentTime);
        $topMinutes = $this->getTopMinutesColorValues($currentTime);
        $bottomHours = $this->getBottomHoursColorValues($currentTime);
        $topHours = $this->getTopHoursColorValues($currentTime);
        $seconds = $this->getSecondesColorValues($currentTime);
        return array((string)$currentTime, (string)$bottomMinutes, (string)$topMinutes, (string)$bottomHours, (string) $topHours, (string) $seconds);
    }

    public function displayBerlinClock()
    {
        //$this->callCurrentTime();
    }


}