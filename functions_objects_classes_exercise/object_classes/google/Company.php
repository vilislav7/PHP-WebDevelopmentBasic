<?php

class Company
{
    private $name;
    private $department;
    private $salary;

    /**
     * Company constructor.
     * @param $name
     * @param $edpartment
     * @param $salary
     */
    public function __construct(string $name, string $department, float $salary)
    {
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    public function __toString()
    {
        return $this->name.' '.$this->department.' '.$this->salary.PHP_EOL;
    }


}