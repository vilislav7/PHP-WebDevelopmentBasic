<?php

require_once 'Food.php';

class Apple extends Food
{
    public function __construct()
    {
        parent::__construct('apple', 1);
    }
}