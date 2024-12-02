<?php
include_once "Rectangle.php";
class Square extends Rectangle{
    public function __construct($name, $width){
        parent::__construct($name,$width,$width);
    }

    public function resize($percent){
        $this->width *= ($percent/100 + 1);
    }
}
?>