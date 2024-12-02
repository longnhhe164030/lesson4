<?php
include_once "Shape.php";
class Circle extends shape{
    public $radius;

    public function __construct($name,$radius){
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius,2);
    }

    public function calculatePerimenter(){
        return pi() * $this->radius * 2 ;
    }

    public function resize($percent){
        $this->radius *= (1 + $percent / 100);  
    }
}
?>