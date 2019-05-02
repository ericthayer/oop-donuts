<?php

namespace App\OOPla\Entities\Models;

abstract class Donut
{
  protected $regular = [];
  protected $special = [];
  protected $monthlySpecial;
  protected $types = [];

  // public function __construct($regularDonut, $specialDonut, $monthlySpecialDonut, $donutTypes)
  // {
  //   $this->regular           =  $regularDonut;
  //   $this->special           =  $specialDonut;
  //   $this->monthlySpecial    =  $monthlySpecialDonut;
  //   $this->types             =  $donutTypes;
  // }

  // public function setType($donutTypes)
  // {
  //     return $this->types[] = $donutTypes;
  // }

  // public function getType()
  // {
  //   $donutTypes = implode(", ", $this->types);
  //   return $donutTypes;
  // }

}
