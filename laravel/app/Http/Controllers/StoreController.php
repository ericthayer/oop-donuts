<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OOPla\Entities\Interfaces\AppleFritter;
use App\OOPla\Entities\Interfaces\BearClaw;
use App\OOPla\Entities\Interfaces\BourbonGlazed;
use App\OOPla\Entities\Interfaces\CinnamonSugar;
use App\OOPla\Entities\Interfaces\CinnamonToast;
use App\OOPla\Entities\Interfaces\CoconutCream;
use App\OOPla\Entities\Interfaces\CrumbCake;
use App\OOPla\Entities\Interfaces\DarkChocolate;
use App\OOPla\Entities\Interfaces\DoubleChocolate;
use App\OOPla\Entities\Interfaces\LemonCustard;
use App\OOPla\Entities\Interfaces\OrangeGlazed;
use App\OOPla\Entities\Interfaces\RootBeerFloat;
use App\OOPla\Entities\Interfaces\Smores;
use App\OOPla\Entities\Interfaces\StrawberryRhubarb;
use App\OOPla\Entities\Interfaces\ToastedCoconut;
use App\OOPla\Entities\Interfaces\HalfDozen;
// use App\OOPla\Entities\Interfaces\FullDozen;

class StoreController extends Controller
{
    public function index()
    {
      // select donuts
      $appleFritter = new AppleFritter('old fashioned', false, false, 4, 1.25);
      $bearClaw = new BearClaw('filled', false, false, 2, 0.65);

      // create box
      $donutBox = new HalfDozen;
      // $donutBox = new FullDozen;
      // $donutBox = new CustomBox;

      // add to box
      $donutBox->addDonutToBox($appleFritter);
      $donutBox->addDonutToBox($bearClaw);

      // calculate cost
      $donutBox->calcDonutCost($appleFritter);
      $donutBox->calcDonutCost($bearClaw);

      //
      // dd($donutBox);

      return view('welcome')->with('donutBox', $donutBox);

    }
}
