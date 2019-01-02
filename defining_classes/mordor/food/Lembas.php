<?php

require_once 'Food.php';

class Lembas extends Food
{
    public function __construct()
    {
        parent::__construct('lembas', 3);
    }
}