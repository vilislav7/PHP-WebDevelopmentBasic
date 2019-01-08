<?php


abstract class Animal implements SoundProducible
{
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
     */
    public function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;

        echo $this->makeSound().PHP_EOL;
        echo $this->__toString().PHP_EOL;
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
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    public function __toString(): string
    {
        return "{$this->name} {$this->age} {$this->gender}";
    }


    abstract public function makeSound(): string;
}