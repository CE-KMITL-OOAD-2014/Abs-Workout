<?php
class Exercise {
    private $name;
    private $description;
    private $set;
    private $timepersit;
    private $calories;
    private $image;
   

    public function __construct(){
        $this->name = NULL;
        $this->description = NULL;
        $this->set = NULL;
        $this->timeperset = NULL;
        $this->calories = NULL;
        $this->image = NULL;
    }

    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getSet(){
        return $this->set;
    }
    public function getTimeperset(){
        return $this->timeperset;
    }
    public function getCalories(){
        return $this->calories;
    }
    public function getImage(){
        return $this->image;
    }

}
   