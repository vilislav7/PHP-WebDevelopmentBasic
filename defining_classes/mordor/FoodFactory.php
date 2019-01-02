<?php

require_once 'food/food_classes.php';

class FoodFactory
{
    private $foods;

    public function __construct(string $foodString)
    {
        $this->foods = [];
        $this->createFoods($foodString);
    }

    private function createFoods (string $input) : void {
        $foods = explode(',', $input);

        foreach ($foods as $food) {
            $food = strtolower($food);

            switch ($food) {
                case 'cram' : $this->foods[] = new Cram();
                    break;
                case 'apple': $this->foods[] = new Apple();
                    break;
                case 'honeycake' : $this->foods[] = new HoneyCake();
                    break;
                case 'lembas': $this->foods[] = new Lembas();
                    break;
                case 'melon' : $this->foods[] = new Melon();
                    break;
                case 'mushrooms': $this->foods[] = new Mushrooms();
                    break;
                default: $this->foods[] = new NormalFood();
            }
        }
    }

    public function getPointOfHappiness () : int {
        $points = 0;
        foreach ($this->foods as $food) {
            $points += $food->getPointOfHappiness();
        }
        return $points;
    }
}