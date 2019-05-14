<?php

namespace App\OOPla\Entities\Interfaces;

use App\OOPla\Entities\Interfaces\Donut;


class CinnamonSugar extends Donut
{

  public function __construct()
  {
    $this->types = ['raised', 'dusted'];
    $this->special = false;
    $this->monthlySpecial = false;
    $this->cost = 0.65;
  }
}

