<?php

namespace Team;

class Command
{
    private $name;
    private $workers;

    public function __construct(string $name, array $workers)
    {
        $this->name = $name;
        $this->workers = $workers;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function totalSum(): float
    {
        $totalSum = 0;

        foreach ($this->workers as $employee) {
            $totalSum += $employee->getSalary();
        }

        return $totalSum;
    }
}