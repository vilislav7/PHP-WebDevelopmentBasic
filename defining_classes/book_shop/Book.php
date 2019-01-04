<?php

include_once 'Author.php';

class Book
{
    /** @var string $title */
    private $title;
    /** @var Author $author */
    private $author;
    /** @var float $price */
    private $price;

    /**
     * Book constructor.
     * @param string $title
     * @param Author $author
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $title, Author $author, float $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @param string $title
     * @throws Exception
     */
    public function setTitle(string $title): void
    {
        if (strlen($title) < 3) {
            throw new Exception('Title not valid!');
        }
        $this->title = $title;
    }

    /**
     * @param Author $author
     */
    public function setAuthor(Author $author): void
    {
        $this->author = $author;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    public function setPrice(float $price): void
    {
        if ($price <= 0) {
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }


}