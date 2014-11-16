<?php
class Statistic {

    private $username;
    private $calories;
    private $times;
   

    public function __construct(){
        $this->username = NULL;
        $this->calories = NULL;
        $this->times = NULL;
    
    }

    public function getUsername(){
        return $this->username;
    }
    public function getCalories(){
        return $this->calories;
    }
    public function getTimes(){
        return $this->times;
    }
  

    public function setUsername($user){
        $this->username = $user;
    }
    public function setCalories($cal){
        $this->calories; = $cal;
    }
    public function setTimes($tme){
        $this->times = $tme;
    }

}
   