<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ShoppingCart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

      View::composer('*', function($view){
        // checking if there's a SC attached on the users session
        $sessionName = 'shopping_cart_id';
        $scid = \Session::get($sessionName);
        $shopping_cart = ShoppingCart::findOrCreateById($scid);
        \Session::put($sessionName, $shopping_cart->id);
        // send the data to views
        $view->with('productsCount', $shopping_cart->id);
      });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
