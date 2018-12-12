<?php

include_once 'Pokemon.php';

class Trainer
{
    private $name;
    private $numbers_of_badges;
    private $pokemons;

    /**
     * Trainer constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->numbers_of_badges = 0;
    }

    public function addPokemon (Pokemon $pokemon) :void {
        $this->pokemons[] = $pokemon;
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
    public function getNumbersOfBadges(): int
    {
        return $this->numbers_of_badges;
    }

    /**
     * @return mixed
     */
    public function getPokemons()
    {
        return $this->pokemons;
    }

    public function possessElement(string $element) :void {
        $found = false;
        foreach ($this->pokemons as $pokemon) {
            if ($pokemon->getElement() === $element) {
                $found = true;
            }
        }

        if ($found) {
            $this->numbers_of_badges ++;
        } else {
            foreach ($this->pokemons as $pokemon) {
                $pokemon->atack();
            }
        }

        $this->checkPokemonsLife();
    }

    private function checkPokemonsLife () :void {
        $this->pokemons = array_filter($this->pokemons, function ($pokemon) {
            return !$pokemon->isDeath();
        });
    }

    public function __toString()
    {
        return $this->name.' '.$this->numbers_of_badges.' '.count($this->pokemons).PHP_EOL;
    }
}

