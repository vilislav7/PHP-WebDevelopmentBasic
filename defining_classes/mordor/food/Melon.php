<?php

require_once 'Food.php';

class Melon extends Food
{
    public function __construct()
    {
        parent::__construct('melon', 1);
    }
}