<?php
class Program1 {

    private $day1;
    private $day2;
    private $day3;
    private $day4;
    private $day5;
    private $day6;
    private $day7;
   

    public function __construct(){
        $this->day1 = NULL;
        $this->day2 = NULL;
        $this->day3 = NULL;
        $this->day4 = NULL;
        $this->day5 = NULL;
        $this->day6 = NULL;
        $this->day7 = NULL;
    }

    public function getDay1(){
        return $this->day1;
    }
    public function getDay2(){
        return $this->day2;
    }
    public function getDay3(){
        return $this->day3;
    }
    public function getDay4(){
        return $this->day4;
    }
    public function getDay5(){
        return $this->day5;
    }
    public function getDay6(){
        return $this->day6;
    }
    public function getDay7(){
        return $this->day7;
    }
}
   