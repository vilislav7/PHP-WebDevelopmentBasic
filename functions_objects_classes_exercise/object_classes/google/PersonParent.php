<?php

class PersonParent
{
    private $name;
    private $birth_date;

    /**
     * PersonParent constructor.
     * @param $name
     * @param $birth_date
     */
    public function __construct(string $name, DateTime $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
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
    public function getBirthDate(): DateTime
    {
        return $this->birth_date;
    }

    public function __toString()
    {
        $result = $this->birth_date->format('d/m/Y');
        return $this->name.' '.$result.PHP_EOL;
    }
}