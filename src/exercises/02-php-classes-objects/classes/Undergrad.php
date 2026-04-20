<?php
require_once __DIR__ . '/Student.php';

class Undergrad extends Student {
    protected string $course;
    protected int $year;

    public function __construct(string $name, string $number, string $course, int $year) {
        parent::__construct($name, $number);
        $this->course = $course;
        $this->year = $year;
    }

    public function getCourse(): string {
        return $this->course;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function __toString(): string {
        return "Undergrad: $this->name ($this->number), $this->course, Year $this->year";
    }
}