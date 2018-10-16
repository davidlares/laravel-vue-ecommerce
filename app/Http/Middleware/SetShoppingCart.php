<?php

namespace App\Http\Middleware;

use Closure;

class SetShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // detecting existing SC
        $sessionName = 'shopping_cart_id';
        $scid = \Session::get($sessionName);
        $shopping_cart = ShoppingCart::findOrCreateById($scid);
        \Session::put($sessionName, $shopping_cart->id);
        // send it to controller
        $request->shopping_cart = $shopping_cart;
        return $next($request);
    }
}
