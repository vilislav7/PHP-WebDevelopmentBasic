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
        $this->setType($type);
        $this->setBakingTechnique($bakingTechnique);
        $this->setWeight($weight);

        $this->setCalories();
    }

    /**
     * @param string $type
     * @throws Exception
     */
    private function setType(string $type): void
    {
        $type = strtolower($type);
        if ($type === 'white' || $type === 'wholegrain') {
            $this->type = $type;
        } else {
            throw new Exception('Invalid type of dough.');
        }
    }

    /**
     * @param string $bakingTechnique
     * @throws Exception
     */
    private function setBakingTechnique(string $bakingTechnique): void
    {
        $bakingTechnique = strtolower($bakingTechnique);
        if ($bakingTechnique === 'crispy' || $bakingTechnique === 'chewy' || $bakingTechnique === 'homemade') {
            $this->bakingTechnique = $bakingTechnique;
        } else {
            throw new Exception('Invalid baking technique of dough.');
        }
    }

    /**
     * @param int $weight
     * @throws Exception
     */
    private function setWeight(int $weight): void
    {
        if ($weight < 1 || $weight > 200) {
            throw new Exception('Dough weight should be in the range [1..200].');
        }
        $this->weight = $weight;
    }

    private function setCalories() :void {
        $typeModifier = 0;
        $btModifier = 0;

        if ($this->type === 'white') {
            $typeModifier = 1.5;
        } elseif ($this->type === 'wholegrain') {
            $typeModifier = 1.0;
        }

        if ($this->bakingTechnique === 'crispy') {
            $btModifier = 0.9;
        }
        if ($this->bakingTechnique === 'chewy') {
            $btModifier = 1.1;
        }
        if ($this->bakingTechnique === 'homemade') {
            $btModifier = 1.0;
        }
        $this->calories = $this->weight * 2 * $typeModifier * $btModifier;
    }

    public function getCalories() : float {
        return $this->calories;
    }
}

