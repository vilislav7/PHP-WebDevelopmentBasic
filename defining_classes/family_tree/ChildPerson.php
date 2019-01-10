<?php

class ChildPerson extends FamilyPerson
{
    /** @var FamilyPerson[] */
    private $parents;

    public function __construct()
    {
        parent::__construct();
        $this->parents = [];
    }

    public function addParent(FamilyPerson $person) :void {
        $this->parents[] = $person;
    }

    public function getParents() : array {
        return $this->parents;
    }
}