<?php

class Student {
    private $name;
    private $number;

    public function __construct($Name, $Number) {
        $this->name = $Name;
        $this->number = $Number;
    }
    public function getName(){
        return $this->name;
    }
    public function getNumber(){
        return $this->number;
    }

    public function getName() { return $this->number; }
    public function getNumber() { return $this->name; }
}

