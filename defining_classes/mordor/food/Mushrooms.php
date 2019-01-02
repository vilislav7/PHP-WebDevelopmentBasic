<?php

require_once 'Food.php';

class Mushrooms extends Food
{
    public function __construct()
    {
        parent::__construct('mushrooms', -10);
    }
}