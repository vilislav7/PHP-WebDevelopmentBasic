<?php

require_once 'Food.php';

class HoneyCake extends Food
{
    public function __construct()
    {
        parent::__construct('honey cake', 5);
    }
}