<?php

class ParentPerson extends FamilyPerson
{
    /** @var ChildPerson[] */
    private $children;

    public function __construct()
    {
        parent::__construct();
        $this->children = [];
    }

    /**
     *@param ChildPerson $person
     */
    public function addPerson(ChildPerson $person) : void {
        $this->children[] = $person;
    }

    public function getChildren() : array {
        return $this->children;
    }
}