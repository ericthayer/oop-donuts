<?php

class HalfDozen
{

    private $donuts;

    public function __construct($donuts = array())
    {
      $this->donuts = $donuts;
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