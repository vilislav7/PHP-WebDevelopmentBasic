<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 1.12.2018 г.
 * Time: 17:05
 */

class Person
{
    private $age;
    private $name;
    private $occupation;

    /**
     * Person constructor.
     * @param $age
     * @param $name
     * @param $occupation
     */
    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

}

