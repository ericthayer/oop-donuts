<?php

namespace App\OOPla\Entities\Interfaces;

abstract class Donut
{
    public $types = [];
    public $special;
    public $monthlySpecial;
    public $count = 0;
    public $cost = 0;

    public function __construct($donutTypes, $specialDonut, $monthlySpecialDonut, $donutCount, $donutCost)
    {
        $this->types[] = $donutTypes;
        $this->special = $specialDonut;
        $this->monthlySpecial = $monthlySpecialDonut;
        $this->count = $donutCount;
        $this->cost = $donutCost;
    }

    // Donut Type

    public function setDonutType(array $donutTypes)
    {
        foreach ($donutTypes as $type) {
            $this->types[] = $type;
        }
        // return $this->type[] = $donutTypes;
    }

    public function getDonutType()
    {
        $donutTypeList = implode(", ", $this->types);
        return $this->$donutTypeList;
    }

    // Special Label

    public function setSpecial(bool $specialLabel)
    {
        $this->special = $specialLabel;
    }

    public function getSpecial()
    {
        return $this->special;
    }

    // Monthly Special

    public function setMonthlySpecial(bool $monthlySpecialLabel)
    {
        $this->monthlySpecial = $monthlySpecialLabel;
    }

    public function getMonthlySpecial()
    {
        return $this->monthlySpecial;
    }

    public function setDonutCount()
    {

    }

    public function getDonutCount()
    {
      return $this->count;
    }

    public function calcDonutCost()
    {
      return $this->cost;
    }
}
