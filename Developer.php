<?php

namespace Team;

class Developer extends Employee
{
    private $position;

    public function __construct(string $firstName, SalaryInterface $salary, string $position)
    {
        parent::__construct($firstName, $salary);
        $this->position = $position;
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}