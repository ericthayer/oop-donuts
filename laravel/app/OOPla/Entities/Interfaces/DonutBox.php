<?php

namespace App\OOPla\Entities\Interfaces;

interface DonutBox
{

    public function setHalfDozen(bool $newHalfDozen);

    public function getHalfDozen();

    public function setFullDozen(bool $newFullDozen);

    public function getFullDozen();
}
