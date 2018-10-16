<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','price','description','image_url'];

    public function url(){
      return $this->id ? 'products.update' : 'products.store';
    }

    public function method(){
      return $this->id ? 'PUT' : 'POST';
    }
}
