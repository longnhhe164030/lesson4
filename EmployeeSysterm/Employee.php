<?php
abstract class Employee{
    public string $name;
    public float $salary;

    public function __construct(string $name,$salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    abstract public function calculateBonus();
}

interface Workable{
    public function work(); 
}
?>