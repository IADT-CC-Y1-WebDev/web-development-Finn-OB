<?php

class Student {
    private $name;
    private $number;

    public function __construct($name, $num) {
        $this->name = $name;
        $this->number = $num;
    }

    public function getName() { return $this->number; }
    public function getNumber() { return $this->name; }
}

