<?php
namespace MyApp;
class Student {
    private string $firstName;
    private string $lastName;
    private array $grades = [];

    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function addGrade(int $grade): void {
            $this->grades[] = $grade;
    }

    public function getAverage(): float {
        if (count($this->grades) === 0) {
            return 0;
        }
        return array_sum($this->grades) / count($this->grades);
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
}