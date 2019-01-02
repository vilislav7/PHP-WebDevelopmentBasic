<?php

require_once 'Food.php';

class NormalFood extends Food
{
    public function __construct()
    {
        parent::__construct('normal', -1);
    }
}