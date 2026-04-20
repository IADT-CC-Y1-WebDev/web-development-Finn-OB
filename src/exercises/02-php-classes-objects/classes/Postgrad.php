<?php
require_once __DIR__ . '/Student.php';

class Postgrad extends Student {
    protected string $supervisor;
    protected string $topic;

    public function __construct(string $name, string $number, string $supervisor, string $topic) {
        parent::__construct($name, $number);
        $this->supervisor = $supervisor;
        $this->topic = $topic;
    }

    public function getSupervisor(): string {
        return $this->supervisor;
    }

    public function getTopic(): string {
        return $this->topic;
    }

    public function __toString(): string {
        return "Postgrad: $this->name ($this->number), Supervisor: $this->supervisor, Topic: $this->topic";
    }
}