<?php

include_once 'GoldenEditionBook.php';

class BookCreator
{
    /** @var Book $book */
    private $book;
    /** @var Author $author */
    private $author;
    /** @var string $type */
    private $type;

    /**
     * @param Author $author
     * @param string $title
     * @param float $price
     * @param string $type
     * @throws Exception
     */
    public function __construct(Author $author, string $title, float $price, string $type)
    {
        $this->author = $author;
        $this->validateType($type);

        $this->createBook($title,$price);
    }

    /**
     * @param string $type
     * @throws Exception
     */
    private function validateType($type) : void {
        $type = strtolower($type);
        if ($type === 'gold' || $type === 'standard') {
            $this->type = $type;
        } else {
            throw new Exception('Type is not valid!');
        }
    }

    /**
     *@param string $title
     *@param float $price
     *@throws Exception
     */
    private function createBook (string $title, float $price) : void {
        if ($this->type === 'gold') {
            $this->book = new GoldenEditionBook($title, $this->author, $price);
        } else {
            $this->book = new Book($title, $this->author, $price);
        }
    }

    public function getBookPrice () : float {
        return $this->book->getPrice();
    }
}