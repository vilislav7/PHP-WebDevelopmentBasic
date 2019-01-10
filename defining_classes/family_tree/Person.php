<?php

class Person extends FamilyPerson
{
    /** @var ChildPerson[] */
    private $children;
    /** @var ParentPerson[] */
    private $parents;

    public function __construct()
    {
        parent::__construct();
        $this->children = [];
        $this->parents = [];
    }

    /**
     *@param ParentPerson $person
     */
    public function addParent(ParentPerson $person) : void {
        $this->parents[] = $person;
    }

    /**
     *@param ChildPerson $person
     */
    public function addChild(ChildPerson $person) : void {
        $this->children[] = $person;
    }

    public function getParents() : array {
        return $this->parents;
    }

    public function getChildren() : array {
        return $this->children;
    }
}