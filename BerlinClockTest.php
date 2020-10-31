<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->berlinClock = new BerlinClock();
    }
    public function testTest() : void
    {
        self::assertEquals(1, 1);
    }
    public function test_getHours_given23_shouldReturn23(){
        $actual = $this->berlinClock->getHours("23:00:00");

        self::assertEquals(23, $actual);
    }
    public function test_getMinutes_given11_shouldReturn11(){
        $actual = $this->berlinClock->getMinutes("23:11:00");

        self::assertEquals(11, $actual);
    }
    public function test_getSecondes_given12_shouldReturn12(){
        $actual = $this->berlinClock->getSecondes("23:11:12");

        self::assertEquals(12, $actual);
    }
    public function test1_bottom_minutes_lamp1_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:01:00");

        self::assertEquals("YOOO", $actual);
    }
    public function test2_bottom_minutes_lamp1_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("22:06:00");

        self::assertEquals("YOOO", $actual);
    }

    public function test_bottom_minutes_lamp1_2_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:07:00");

        self::assertEquals("YYOO" , $actual);
    }

    public function test_bottom_minutes_lamp1_2_3_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:28:00");

        self::assertEquals("YYYO" , $actual);
    }
    public function test_bottom_minutes_lamp1_2_3_4_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:39:00");

        self::assertEquals("YYYY" , $actual);
    }
    public function test_bottom_minutes_all_lamp_off(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:10:00");

        self::assertEquals("OOOO" , $actual);
    }



}