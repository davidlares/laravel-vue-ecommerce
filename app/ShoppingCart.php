<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public static function findOrCreateById($shopping_cart_id){
      if($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
      } else {
        return ShoppingCart::create(); // status by default is 0
      }
    }

    public function products(){
      return $this->belongsToMany('App\Product','product_in_shopping_carts');
    }

    public function productsCount(){
      return $this->products()->count();
    }

    public function amount(){
      // return $this->products()->sum('price') / 100;
      return $this->products()->sum('price');
    }
}
