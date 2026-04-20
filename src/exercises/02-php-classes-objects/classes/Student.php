<?php

class Student {
    protected string $name;
    protected string $number;

    public function __construct(string $name, string $number) {
        if (empty($number)) {
            throw new Exception("Student number cannot be empty");
        }
        $this->name = $name;
        $this->number = $number;
        echo "Creating student: $name <br>";
    }

    public function __toString(): string {
        return "Student: $this->name ($this->number)";
    }

    public function __destruct() {
        echo "Student $this->name has left the system <br>";
    }

    public function getName(): string {
        return $this->name;
    }

    public function getNumber(): string {
        return $this->number;
    }
}

