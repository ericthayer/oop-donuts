<?php

namespace App\OOPla\Entities\Interfaces;

use App\OOPla\Entities\Interfaces\Donut;


class BourbonGlazed extends Donut
{

  public function __construct()
  {
    $this->types = ['raised', 'glazed'];
    $this->special = false;
    $this->monthlySpecial = false;
    $this->cost = 0.65;
  }
}

