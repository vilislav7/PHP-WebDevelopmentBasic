<?php

include_once 'Company.php';
include_once 'Pokemon.php';
include_once 'PersonParent.php';
include_once 'PersonChild.php';
include_once 'Car.php';

class Person
{
    private $name;
    private $company;
    private $pokemons;
    private $parents;
    private $children;
    private $car;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    private function addCompany (string $name, string $dep, float $salary) :void {
        $this->company = new Company($name,$dep, $salary);
    }

    private function addPokemon (string $name, string $type) :void {
        $this->pokemons[] = new Pokemon($name, $type);
    }

    private function addParent (string $name, DateTime $birth) :void {
        $this->parents[] = new PersonParent($name, $birth);
    }

    private function addChild (string $name, DateTime $birth) :void {
        $this->children[] = new PersonChild($name, $birth);
    }

    private function addCar (string $model, int $speed) :void {
        $this->car = new Car($model, $speed);
    }

    public function addInfo (string $info, string $arg1, string $arg2, string $arg3 = null) :void {
        switch ($info) {
            case 'company' : $this->addCompany($arg1, $arg2, $arg3);
                break;
            case 'pokemon' : $this->addPokemon($arg1, $arg2);
                break;
            case 'parents' : {
                $birth_date = date_create_from_format('d/m/Y',$arg2);
                $this->addParent($arg1, $birth_date);
            }
                break;
            case 'children' : {
                $birth_date = date_create_from_format('d/m/Y',$arg2);
                $this->addChild($arg1, $birth_date);
            }
                break;
            case 'car' : $this->addCar($arg1, $arg2);
        }
    }

    public function __toString()
    {
        $person = $this->name.PHP_EOL;
        $person .= 'Company:'.PHP_EOL.$this->company;
        $person .= 'Car:'.PHP_EOL.$this->car;
        $person .= 'Pokemon:'.PHP_EOL;

        if (count($this->pokemons) > 0) {
            foreach ($this->pokemons as $pokemon) {
                $person .= $pokemon;
            }
        }
        $person .= 'Parents:'.PHP_EOL;

        if (count($this->parents) > 0) {
            foreach ($this->parents as $parent) {
                $person.= $parent;
            }
        }

        $person .= 'Children:'.PHP_EOL;

        if (count($this->children) > 0) {
            foreach ($this->children as $child) {
                $person .= $child;
            }
        }

        return $person;
    }
}