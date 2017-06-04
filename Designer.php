<?php

namespace Team;

class Designer extends Employee
{
    private $position;

    public function __construct(string $firstName, SalaryInterface $salary)
    {
        parent::__construct($firstName, $salary);
        $this->position = 'Дизайнер';
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}