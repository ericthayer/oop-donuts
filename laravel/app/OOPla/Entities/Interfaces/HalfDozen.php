<?php

namespace App\OOPla\Entities\Interfaces;

use App\OOPla\Entities\Interfaces\Donut;

class HalfDozen
{
  public $donuts = [];

  public function addDonutToBox(Donut $donut)
  {
    $this->donuts[] = $donut;
  }

  public function getDonutCount()
  {
    $count = 0;

    foreach($this->donuts as $donut) {
      $count = $count + $donut->getDonutCount();
    }

    return $count;
  }

  public function calcDonutCost()
  {
    $cost = 0;

    foreach($this->donuts as $donut) {
      $cost = $cost + $donut->calcDonutCost();
    }

    return $cost;
  }
}

