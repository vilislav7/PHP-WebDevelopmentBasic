<?php

include_once 'Book.php';

class GoldenEditionBook extends Book
{
    public function __construct(string $title, Author $author, float $price)
    {
        $price += 30/100*$price;
        parent::__construct($title, $author, $price);
    }
}