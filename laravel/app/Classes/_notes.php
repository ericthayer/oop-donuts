<?php

// GOAL: Capture and Create an Order of Donuts.

// 1. Get the Donut(s) - Donut.php

//    $donut properties that make up an order:
//      $regularDonut                 = ['bars', 'cake', 'raised', 'twists']
//      $specialDonut                 = ['filled', 'sprinkels', 'monthlySpecial']
//      $monthlySpecialDonut(bool)    = false
//**    $donutTypes                   = []

// 2. Put the Donut(s) in a Box - HalfDozen.php, FullDozen.php

//      $donutCount      = sum($donutTypes)
//      $halfDozenBox    = $donutCount === 6
//      $fullDozenBox    = $donutCount === 12 ? $donutCount++ : $customBox (customer gets one free)
//      $customBox       = $donutCount != 6 && $donutCount !=12

// 3. Add up the Cost - Cost.php

//    We need to calculate the cost by:
//      $regularPrice              = 0.65
//      $specialPrice              = 1.00
//      $monthlySpecialPrice       = 0.50
//      $regularDonutCost          = $regularDonutCount * $regularPrice
//      $specialDonutCost          = $specialDonutCount * $specialPrice
//      $monthlySpecialDonutCost   = $monlthySpecialDonutCount * $monthlySpecialDonutPrice


// 4. Print Receipt - Receipt.php

//   We need to create a Receipt displaying:
//    $orderType      = $halfDozen || $fullDozen
//    $orderCost      = sum($regularDonutCost, $specialDonutCost, $monthlySpecialDonutCost)
//    $orderMessage   = String
//    $orderStatement = echo $orderType . $orderCost . $orderMessage


// $donuts = [
//     'rings' => new GlazedRing(4),
//     'bars' => new MapleBar(2),
// ];

// $dozen = new Dozen($donuts);

?>
