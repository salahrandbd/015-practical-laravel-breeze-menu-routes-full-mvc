<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
  public function checkout()
  {
    $plan = Plan::findOrFail(request('plan_id'));

    return view('billing.checkout', compact('plan'));
  }
}
