<?php
require_once 'Class.php';
$manager = new Manager('Jack ',1000);
$dev = new Developer('Bob ',5000);
$designer = new Designer('Alice ',1200);
echo $manager->work();
echo " Manager reward: $". $manager->calculateBonus()."<br>";

echo $dev->work();
echo " Developer reward: $" . $dev->calculateBonus()."<br>";

echo $designer->work();
echo " Designer reward: $" . $designer->calculateBonus(). "<br>";
?>