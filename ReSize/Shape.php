<?php
    class shape{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function show(){
            return "I am a shape.My name is $this->name";
        }
    }

    interface Resizeable{
        public function resize($percent);
    }
?>