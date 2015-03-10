<?php
class User{

	private $weight = 0.0;
 	private $heightInInches = 0.0;
 	private $finalNumber = 0.0;
 	private const CALCULATION = 703;

public function setWeight($weight)
	{
		$this->weight = $weight;
	}

public function setHeight($heightInInches)
	{
		$this->heightInInches = $heightInInches;
	}

private function BMICalculator()
{
  $BMI= ($this->weight / ($this->heightInInches * $this->heightInInches)) * CONSTANT;
  $finalNumber = number_format($BMI, 2);
 }

public function getBMI(){
	return $finalNumber;
}
}
?>