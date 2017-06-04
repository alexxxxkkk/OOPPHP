<?php

namespace Team;

require_once('Employee.php');

class Coder extends Employee
{
    private $position;

    public function __construct($firstName, SalaryInterface $salary)
    {
        parent::__construct($firstName, $salary);
        $this->position = 'Верстальщик';
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}