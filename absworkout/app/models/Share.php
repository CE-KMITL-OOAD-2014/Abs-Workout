<?php
class Share {

    private $username;
    private $calories;
    private $times;
    private $comment;
    private $image;
   

    public function __construct(){
        $this->username = NULL;
        $this->calories = NULL;
        $this->times = NULL;
        $this->comment = NULL;
        $this->image = NULL;
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
    public function getComment(){
        return $this->comment;
    }
    public function getImage(){
        return $this->image;
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
    public function setComment($cmt){
        $this->comment = $cmt ;
    }
    public function setImage($img){
        $this->image = $img ;
    }

}
   