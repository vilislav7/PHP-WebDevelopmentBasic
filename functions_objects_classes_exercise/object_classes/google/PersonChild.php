<?php

class PersonChild
{
    private $name;
    private $birthday;

    /**
     * PersonChild constructor.
     * @param $name
     * @param $birthday
     */
    public function __construct(string $name, DateTime $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTime
     */
    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    public function __toString()
    {
        $result = $this->birthday->format('d/m/Y');
        return $this->name.' '.$result.PHP_EOL;
    }



}