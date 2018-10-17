<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paypal;

class PaymentsController extends Controller
{
    public function __constructor(){
      $this->middleware('shopping_cart');
    }
    public function pay(Request $request){
      $amount = $request->shopping_cart->amount();

      $paypal = new Paypal();
      $response = $paypal->charge($amount); // response to the request
      // return var_dump($response);
    }
}
