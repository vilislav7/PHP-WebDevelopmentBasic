<?php

include_once 'Author.php';

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
     * @throws Exception
     */
    public function __construct(string $title, Author $author, int $price)
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
     * @param int $price
     * @throws Exception
     */
    public function setPrice(int $price): void
    {
        if ($price <= 0) {
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }




}