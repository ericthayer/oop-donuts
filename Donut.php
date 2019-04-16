<?php

abstract class Donut
{
  private $type = [];
  private $price = 0.65;
  private $specialPrice = 1.15;
  private $monthlySpecialPrice = .50;
  private $count = 1;

  public function __construct($donutType, $donutPrice, $specialPrice, $monthlySpecialPrice, $donutCount)
  {
    $this->type                 = $donutType;
    $this->price                = $donutPrice;
    $this->specialPrice         = $specialPrice;
    $this->monthlySpecialPrice  = $monthlySpecialPrice;
    $this->count                = $donutCount;
  }  

  public function setType($newType)
  {
      return $this->type[] = $newType;
  }

  public function getType()
  {
    $donutTypes = implode(", ", $this->type);
    return $donutTypes;
  }

  public function setPrice($newPrice)
  {   
      return $this->price = $newPrice;
  }

  public function getPrice()
  {
      return $this->price;
  }

  public function setSpecialPrice($newSpecialPrice)
  {
      return $this->specialPrice = $newSpecialPrice;
  }

  public function getSpecialPrice()
  {
      return $this->specialPrice;
  }

  public function setMothlySpecialPrice($newMonthlySpecialPrice)
  {
      return $this->monthlySpecialPrice = $newMonthlySpecialPrice;
  }

  public function getMonthlySpecialPrice()
  {
      return $this->monthlySpecialPrice;
  }

  public function setTotalPrice($totalPrice)
  {   
      return $this->price = $totalPrice;
  }

  public function getTotalPrice($totalPrice)
  {
      $totalPrice =  $this->price + $this->specialPrice + $this->specialPrice; 
      return $totalPrice;
  }

  public function setCount($newDonutCount)
  {
      return $this->donutCount = $newDonutCount;
  }

  public function getCount()
  {
      return $this->count;
  }

}

?>