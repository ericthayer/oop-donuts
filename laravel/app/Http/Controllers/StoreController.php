<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
      $donut = new Donut;

      return view('welcome')->with('donut', $donut);
    }
}
