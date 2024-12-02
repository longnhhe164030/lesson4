<?php
require_once 'Employee.php';

class Manager extends Employee implements Workable{
    public function calculateBonus(){
        return $this->salary * 0.2;
    }

    public function work(){
        return $this->name. " is Project Manager.";
    }
}

class Developer extends Employee implements Workable{
    public function calculateBonus(){
        return $this->salary * 0.1;
    }

    public function work(){
        return $this->name. "is Developer.";
    }
}

class Designer extends Employee implements Workable{
    public function calculateBonus(){
        return $this->salary * 0.15;
    }
    public function work(){
        return $this->name. "is Designer.";
    }
}
?>
