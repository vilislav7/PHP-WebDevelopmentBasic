<?php

class Month
{
    private $year;
    private $days;
    private $name;
    private $monthNum;
    private $size;

    /**
     * Month constructor.
     * @param $year
     * @param $monthName
     * @param $monthNum
     * @param $size
     */
    public function __construct(Year $year, string $monthName, int $monthNum, int $size)
    {
        $this->year = $year;
        $this->name = $monthName;
        $this->monthNum = $monthNum;
        $this->size = $size;

        $this->addDays($year, $size);
    }

    /**
     * @return Year
     */
    public function getYear(): Year
    {
        return $this->year;
    }

    /**
     * @return array
     */
    public function getDays(): array
    {
        return $this->days;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getMonthNum(): int
    {
        return $this->monthNum;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    private function addDays (Year $year, int $size) :void {
        for ($day = 1; $day <= $size; $day++) {
            $dayCreated = new Day($year, $this, $day);
            $this->addDay($dayCreated);
        }
    }

    private function addDay(Day $day):void {
        $this->days[] = $day;
    }
}