<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paypal;
use App\Order;
use Session;

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
      $redirectLinks = array_filter($reponse->result_links, function(){
        return $link->method == 'REDIRECT';
      });
      $redirectLinks = array_values($redirectLinks);
      return redirect($redirectLinks[0]->href);
    }

    public function completed(Request $request){
      $paypal = new Paypal();
      $response = $paypal->execute($request->paymentId, $request->payerID);
      if($response->statusCode == 200){
        $order = Order::createFromPayPalResponse($response->result, $request->shopping_cart);
        if($order){
          Session::remove('shopping_cart_id');
          return view('payments.sucess', ['shopping_cart' => $request->shopping_cart, 'order' => $order]);
        }
      } else {
        return redirect(URL::config('shopping_cart.show'));
      }
    }
}
