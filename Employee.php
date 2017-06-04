<?php

namespace Team;

abstract class Employee
{
    private $firstName;
    private $salary;

    public function __construct(string $firstName, SalaryInterface $salary)
    {
        $this->firstName = $firstName;
        $this->salary = $salary;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getSalary(): float
    {
        return $this->salary->getSalary();
    }
}