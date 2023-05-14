<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use View;

class BillingController extends Controller
{
  public function index(): mixed
  {
    $plans = Plan::all();

    return view('billing.index', compact('plans'));
  }
}
