<?php
class UserData
{
    private $name;
    private $age;
    private $gender;

    /**
     * User constructor.
     * @param $name
     * @param $age
     * @param $gender
     */
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getData() :string
    {
        return "My name is {$this->name}. I am {$this->age} years old. I am {$this->gender}";
    }


}