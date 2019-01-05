<?php

class Human
{
    /** @var string $firstName */
    private $firstName;
    /** @var string $lastName */
    private $lastName;


    /**
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     *@param string $firstName
     *@throws Exception
     */
    private function setFirstName($firstName) : void {
        if (!ctype_upper($firstName[0])) {
            throw new Exception('Expected upper case letter! Argument: firstName');
        }

        if (strlen($firstName) < 4) {
            throw new Exception('Expected length at least 4 symbols! Argument: firstName');
        }

        $this->firstName = $firstName;
    }
    /**
     *@param string $lastName
     *@throws Exception
     */
    private function setLastName($lastName) : void {
        if (!ctype_upper($lastName[0])) {
            throw new Exception('Expected upper case letter! Argument: lastName');
        }

        if (strlen($lastName) < 4) {
            throw new Exception('Expected length at least 4 symbols! Argument: firstName');
        }

        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }


}