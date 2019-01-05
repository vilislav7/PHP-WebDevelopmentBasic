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

    public function __toString() : string
    {
        $weekSalary = round($this->weekSalary, 2);
        $workHoursPerDay = round($this->workHoursPerDay, 2);
        $salaryPerHour = round($this->weekSalary / $this->workHoursPerDay * 7, 2);

        $workerStr = parent::__toString();
        $workerStr .= "Week Salary {$weekSalary}". PHP_EOL;
        $workerStr .= "Hours per day {$workHoursPerDay}". PHP_EOL;
        $workerStr .= "Salary per hour {$salaryPerHour}". PHP_EOL;

        return $workerStr;
    }

}