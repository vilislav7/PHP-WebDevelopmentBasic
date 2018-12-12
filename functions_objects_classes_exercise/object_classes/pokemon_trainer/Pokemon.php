<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 11.12.2018 г.
 * Time: 17:50
 */

class Pokemon
{
    private $name;
    private $element;
    private $health;
    private $isDeath;

    /**
     * Pokemon constructor.
     * @param $name
     * @param $element
     * @param $health
     */
    public function __construct(string $name, string $element, int $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
        $this->isDeath = false;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getElement(): string
    {
        return $this->element;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @return bool
     */
    public function isDeath(): bool
    {
        return $this->isDeath;
    }



    public function atack() : void {
        $this->health -= 10;
        $this->checkIfDeath();
    }

    private function checkIfDeath () : bool {
        $is_dead = false;
        if($this->health <= 0) {
            $this->isDeath = true;
            $is_dead = true;
            $this->health = 0;
        }
        return $is_dead;
    }

}