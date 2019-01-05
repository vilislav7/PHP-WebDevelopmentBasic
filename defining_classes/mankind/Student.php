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

    private function getFacultyNumber () : string {
        return $this->facultyNumber;
    }

    public function __toString() : string
    {
        return parent::__toString() . "Faculty number {$this->getFacultyNumber()}". PHP_EOL;
    }
}