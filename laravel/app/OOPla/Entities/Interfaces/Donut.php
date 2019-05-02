<?php

interface Donut
{
    public function setDonutType(): array;
    public function getDonutType();
    public function setSpecialLabel();
    public function getSpecialLabel();
    public function setMonthlySpecialLabel();
    public function getMonthlySpecialLabel();

}

class LabelDonut implements Donut
{
    protected $type = [];
    protected $special;
    protected $monthlySpecial;

    public function __construct($donutTypes, $specialDonut, $monthlySpecialDonut)
    {
        $this->type = $donutTypes;
        $this->special = $specialDonut;
        $this->monthlySpecial = $monthlySpecialDonut;
    }

    public function setDonutType($donutTypes)
    {
        return $this->type[] = $donutTypes;
    }

    public function getDonutType()
    {
        $donutTypes = implode(", ", $this->type);
        return $donutTypes;
    }

}
