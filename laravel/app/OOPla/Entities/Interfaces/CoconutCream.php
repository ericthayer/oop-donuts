<?php

namespace App\OOPla\Entities\Interfaces;

use App\OOPla\Entities\Interfaces\Donut;


class CoconutCream extends Donut
{

  public $cost = 1.75;

  public function __construct($cost)
  {
    $this->types = ['raised', 'filled'];
    $this->special = true;
    $this->monthlySpecial = false;
    $this->cost = $cost;
  }

}


