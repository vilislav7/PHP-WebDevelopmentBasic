<?php

include_once 'Person.php';

class Family
{
    private $people;

    /**
     * Family constructor
     */
    public function __construct()
    {
        $this->people = [];
    }

    public function addMember(Person $person) :void {
        $this->people[] = $person;
    }

    public function getOldestMember() : Person {
        $oldest = null;
        $oldest_age = -1;

        foreach ($this->people as $person) {
            if ($person->getAge() > $oldest_age) {
                $oldest = $person;
                $oldest_age = $person->getAge();
            }
        }

        return $oldest;
    }

}