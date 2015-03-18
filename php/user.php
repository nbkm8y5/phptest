<?php

class User
{
    /**
     * @var float
     */
    private $weight = 0.0;
    /**
     * @var float
     */
    private $heightInInches = 0.0;
    /**
     * @var float
     */
    private $finalNumber = 0.0;
    /**
     * @var int
     */
    private $CALCULATION = 703;

    /**
     * @param $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param $heightInInches
     */
    public function setHeight($heightInInches)
    {
        $this->heightInInches = $heightInInches;
    }

    /**
     *
     */
    private function BMICalculator()
    {
        $BMI = ($this->weight / ($this->heightInInches * $this->heightInInches)) * $this->CALCULATION;
        $this->finalNumber = number_format($BMI, 2);

    }

    /**
     * @return float
     */
    public function getFinalNumber()
    {
        $this->BMICalculator();
        return $this->finalNumber;
    }
}