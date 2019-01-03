<?php

class Dough
{
    /** @var string $type*/
    private $type;
    /** @var string $bakingTechnique */
    private $bakingTechnique;
    /** @var float $calories */
    private $calories;
    /** @var int $weight */
    private $weight;

    /**
     * Dough constructor.
     * @param string $type
     * @param string $bakingTechnique
     * @param int $weight
     * @throws Exception
     */
    public function __construct(string $type, string $bakingTechnique, int $weight)
    {

    }
}