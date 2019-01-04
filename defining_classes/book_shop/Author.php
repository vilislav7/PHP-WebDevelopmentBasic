<?php

class Author
{
    /** @var string $firstName */
    private $firstName;
    /** @var string $lastName */
    private $lastName;
    /** @var Book[] $books */
    private $books;

    /**
     * Author constructor.
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @param string $firstName
     */
    private function setFirstName ($firstName) : void {
        $this->firstName = $firstName;
    }
    /**
     * @param string $lastName
     * @throws Exception
     */
    private function setLastName ($lastName) : void {
        if (is_numeric($lastName[0])) {
            throw new Exception('Author not valid!');
        }
        $this->lastName = $lastName;
    }

    /**
     * @param Book $book
     */
    public function addBook (Book $book) : void {
        $this->books[] = $book;
    }

    public function getFullName() :string {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getBooks() : array {
        return $this->books;
    }

}