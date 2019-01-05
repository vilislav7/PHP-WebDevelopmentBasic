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
        if (strlen($lastName) <= 3) {
            throw new Exception('Expected length more than 3 symbols! Argument: lastName');
        }
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($weekSalary);
        $this->setWorkHoursPerDay($workHoursPerDay);
    }

    /**
     * @param float $weekSalary
     * @throws Exception
     */
    private function setWeekSalary(float $weekSalary): void
    {
        if ($weekSalary <= 10) {
            throw new Exception('Expected value mismatch! Argument weekSalary');
        }
        $this->weekSalary = $weekSalary;
    }

    /**
     * @param int $workHoursPerDay
     * @throws Exception
     */
    private function setWorkHoursPerDay(int $workHoursPerDay): void
    {
        if ($workHoursPerDay < 1 || $workHoursPerDay > 12) {
            throw new Exception('Expected value mismatch! Argument workHoursPerDay');
        }
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