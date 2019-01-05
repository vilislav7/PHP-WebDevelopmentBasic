<?php


class Student extends Human
{
    /** @var string */
    private $facultyNumber;


    /**
     *@param string $firstName
     *@param string $lastName
     *@param string $facultyNumber
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName, string $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }


    /**
     *@param string $facultyNumber
     *@throws Exception
     */
    private function setFacultyNumber ($facultyNumber) : void {
        $facultyNumberLength = strlen($facultyNumber);
        if ($facultyNumberLength < 5 || $facultyNumberLength > 10) {
            throw new Exception('Invalid faculty number!');
        }

        $this->facultyNumber = $facultyNumber;
    }

    public function getFacultyNumber () : string {
        return $this->facultyNumber;
    }

    public function __toString()
    {
        $studentStr = "Firs Name: {$this->getFirstName()}" . PHP_EOL;
        $studentStr .= "Last Name: {$this->getLastName()}" . PHP_EOL;
        $studentStr .= "Faculty number {$this->getFacultyNumber()}". PHP_EOL;

        return $studentStr;
    }
}