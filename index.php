<?php

use Team\ {
    Command,
    Developer,
    Designer,
    Coder,
    FixedSalary,
    DynamicSalary
};

require_once('Command.php');
require_once('Coder.php');
require_once('Designer.php');
require_once('Developer.php');
require_once('DynamicSalary.php');
require_once('Employee.php');
require_once('FixedSalary.php');
require_once('SalaryInterface.php');

$command = new Command('X', array(
    new Designer('Bob', new FixedSalary(3000)),
    new Developer('Alex', new DynamicSalary(60, 10), 'Senior Developer'),
    new Developer('Jon', new FixedSalary(1000), 'Middle Developer'),
    new Coder('Eva', new DynamicSalary(120, 5)),
));

echo 'Общая сумма, необходимая для выплаты зарплаты: ' . $command->totalSum();