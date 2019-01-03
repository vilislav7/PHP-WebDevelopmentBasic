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
        if ($type === 'White' || $type === 'Wholegrain') {
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
        if ($bakingTechnique === 'Crispy' || $bakingTechnique === 'Chewy' || $bakingTechnique === 'Homemade') {
            $this->bakingTechnique = $bakingTechnique;
        } else {
            throw new Exception('Invalid baking technique of dough.');
        }
    }

    /**
     * @param int $weight
     * @throws Exception
     */
    public function setWeight(int $weight): void
    {
        if ($weight < 1 || $weight > 200) {
            throw new Exception('Dough weight should be in the range [1..200]');
        }
        $this->weight = $weight;
    }

    private function setCalories() :void {
        $typeModifier = 0;
        $btModifier = 0;

        if ($this->type === 'White') {
            $typeModifier = 1.5;
        } elseif ($this->type === 'Wholegrain') {
            $typeModifier = 1.0;
        }

        if ($this->bakingTechnique === 'Crispy') {
            $btModifier = 0.9;
        }
        if ($this->bakingTechnique === 'Chewy') {
            $btModifier = 1.1;
        }
        if ($this->bakingTechnique === 'Homemade') {
            $btModifier = 1.0;
        }
        $this->calories = $this->weight * 2 * $typeModifier * $btModifier;
    }

    public function getCalories() : float {
        return $this->calories;
    }
}

