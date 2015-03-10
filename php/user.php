<?php
class User
{

    private $weight = 0.0;
    private $heightInInches = 0.0;
    private $finalNumber = 0.0;
    private $CALCULATION = 703;

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setHeight($heightInInches)
    {
        $this->heightInInches = $heightInInches;
    }

    public function BMICalculator()
    {
        $BMI = ($this->weight / ($this->heightInInches * $this->heightInInches)) * $this->CALCULATION;
        $this->finalNumber = number_format($BMI, 2);
        return $this->finalNumber;
    }
}