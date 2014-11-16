<?php
class User {

    private $username;
    private $password;
    private $email;
    private $weight;
    private $height;
    private $age;
    private $image;
    private $startdate;
   

    public function __construct(){
        $this->username = NULL;
        $this->password = NULL;
        $this->email = NULL;
        $this->weight = NULL;
        $this->height = NULL;
        $this->age = NULL;
        $this->startdate = NULL;
    }

    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getAge(){
        return $this->age;
    }
    public function getImage(){
        return $this->image;
    }
    public function getStartdate(){
        return $this->startdate;
    }



    public function setUsername($user){
        $this->username = $user;
    }
    public function setPassword($pass){
        $this->password = $pass;
    }
    public function setEmail($eml){
        $this->email = $eml;
    }
    public function setWeight($wght){
        $this->weight = $wght ;
    }
    public function setHeight($hght){
        $this->height = $hght ;
    }
    public function setAge($ag){
        $this->age = $ag ;
    }
    public function setImage($img){
        $this->image = $img ;
    }
    public function setStartdate($stdate){
        $this->startdate = $stdate ;
    }

}
   