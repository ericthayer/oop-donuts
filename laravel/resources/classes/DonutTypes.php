<?php

class GlazedRing 
{
  
  // private $type = "raised";
  // private $topping = "glazed";
  // private $toppingType = "vanilla";
  // private $sprinkles = false;
  // private $count;

  
}

class MapleBar 
{
  private $type = "bar";
  private $topping = "glazed";
  private $toppingType = "maple";
  private $sprinkles = false;
  private $count;

  public function __construct($count)
  {
      $this->count = $count;
  }
  
  public function getCount()
  {
    return $this->count;
  }
  
  public function getType()
  {
      return $this->type;
  }

  public function getTopping()
  {
      return $this->topping;
  }

  public function getToppingType()
  {
      return $this->toppingType;
  }

  public function getSprinkles()
  {
      return $this->sprinkles;
  }
}

?>