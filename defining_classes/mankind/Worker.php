<?php

class Worker extends Human
{
    /** @var float $weekSalary */
    private $weekSalary;
    /** @var int $workHoursPerDay */
    private $workHoursPerDay;


    /**
     * @param string $firstName
     * @param string $lastName
     * @param float $weekSalary
     * @param int $workHoursPerDay
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName, float $weekSalary, int $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->weekSalary = $weekSalary;
        $this->workHoursPerDay = $workHoursPerDay;
    }

    /**
     * @return float
     */
    public function getWeekSalary(): float
    {
        return $this->weekSalary;
    }

    /**
     * @return int
     */
    public function getWorkHoursPerDay(): int
    {
        return $this->workHoursPerDay;
    }


}