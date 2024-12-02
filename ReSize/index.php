<?php
require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$shapes = [new Circle('Circle1',10),
          new Rectangle('Rectangle1',10,5),
          new Square('Square1',5)     ];
        foreach($shapes as $shape){
            echo 'Befor resize '. $shape->name .'Area = '.number_format($shape->calculateArea(),2).'\n';
            $percent = rand(1,100);

            $shape ->resize($percent);

            echo "After resize by $percent%:". "Area = " .number_format($shape->calculateArea(),2) ."\n";
            echo "<br>";
        }  
?>