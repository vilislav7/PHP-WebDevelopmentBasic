<?php

include_once 'functions.php';
abstract class Animal implements SoundProducible
{
    private const EXCEPTION_MSG = 'Invalid input';
    /** @var string $name */
    private $name;
    /** @var int $age */
    private $age;
    /** @var string $gender */
    private $gender;


    /**
     *@param string $name
     *@param int $age
     *@param string $gender
     * @throws Exception
     */
    public function __construct(string $name, int $age, string $gender)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);

        echo $this->makeSound().PHP_EOL;
        echo $this->__toString().PHP_EOL;
    }

    /**
     * @return string
     */
    protected function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    protected function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    protected function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if (isEmpty($name)) {
            throw new Exception(self::EXCEPTION_MSG);
        }
        $this->name = $name;
    }

    /**
     * @param int $age
     * @throws Exception
     */
    private function setAge(int $age): void
    {
        if ( $age < 0 || isEmpty($age)) {
            throw new Exception(self::EXCEPTION_MSG);
        }
        $this->age = $age;
    }

    /**
     * @param string $gender
     * @throws Exception
     */
    private function setGender(string $gender): void
    {
        if (isEmpty($gender)) {
            throw new Exception(self::EXCEPTION_MSG);
        }
        $this->gender = $gender;
    }

    public function __toString(): string
    {
        return "{$this->name} {$this->age} {$this->gender}";
    }


    abstract public function makeSound(): string;
}