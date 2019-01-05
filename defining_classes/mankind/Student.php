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
        $this->facultyNumber = $facultyNumber;
    }

    public function getFacultyNumber () : string {
        return $this->facultyNumber;
    }
}