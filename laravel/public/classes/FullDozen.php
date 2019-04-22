<?php

class Dozen
{

    private $donuts;

    private $count = 1;

    public function __construct($donuts = [], $donutCount)
    {
      $this->donuts[] = $donuts;
      $this->count  = $donutCount;
    }

    public function quantity()
    {
      $quantity = 0;
      foreach($this->donuts as $donut){
        if($donut->type=="type"){
          $quantity = $quantity + $donut->getType() * $donut->getCount();
        }else {
            $quantity = $quantity + $donut->getCount();
          }
      }
      return $quantity;
    }
}

?>