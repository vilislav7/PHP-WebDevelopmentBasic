<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 1.12.2018 г.
 * Time: 19:15
 */

class PersonSecond
{
    private $name;

    /**
     * Person1 constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello() {
        echo $this->name. ' says "Hello"!'.PHP_EOL;
    }

}
