<?php
require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Square.php';
$shapes = [new Square('Square1',4),new Square('Square2',5)];
        foreach($shapes as $shape){
            echo "Area : ".number_format($shape->calculateArea(),2)."<br>";
            if($shape instanceof Colorable){
                echo $shape->howToColor()."<br>";
            }
        }

?>