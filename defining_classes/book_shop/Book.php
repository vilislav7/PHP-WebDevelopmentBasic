<?php

class Book
{
    /** @var string $title */
    private $title;
    /** @var Author $author */
    private $author;
    /** @var int $price */
    private $price;

    /**
     * Book constructor.
     * @param string $title
     * @param Author $author
     * @param int $price
     */
    public function __construct(string $title, Author $author, int $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
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
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }




}