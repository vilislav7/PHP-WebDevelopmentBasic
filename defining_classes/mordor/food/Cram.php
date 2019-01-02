<?php

require_once 'Food.php';

class Cram extends Food
{
    public function __construct()
    {
        parent::__construct('cram', 2);
    }
}