<?php

namespace Team;

require_once('SalaryInterface.php');

class DynamicSalary implements SalaryInterface
{
    private $salary;

    public function __construct(float $hour, float $amount)
    {
        $this->salary = $hour * $amount;
    }

    public function getSalary():float
    {
        return $this->salary;
    }
}