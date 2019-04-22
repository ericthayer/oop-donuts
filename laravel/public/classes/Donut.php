<?php

abstract class Donut
{
  private $regular = [];
  private $special = [];
  private $monthlySpecial;
  private $types = [];

  public function __construct($regularDonut, $specialDonut, $monthlySpecialDonut, $donutTypes)
  {
    $this->regular           =  $regularDonut;
    $this->special           =  $specialDonut;
    $this->monthlySpecial    =  $monthlySpecialDonut;
    $this->types             =  $donutTypes;
  }

  public function setType($donutTypes)
  {
      return $this->types[] = $donutTypes;
  }

  public function getType()
  {
    $donutTypes = implode(", ", $this->types);
    return $donutTypes;
  }

}

?>