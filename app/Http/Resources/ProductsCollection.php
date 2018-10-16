<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
          'data' => $this->collection->transform(function($elem){
            return [
              'title' => $elem->title,
              'id' => $elem->id,
              'humanPrice' => "$".($elem->price / 100),
              'numberPrice' => $elem->price / 100,
              'image' => $elem->image_url,
              'description' => $elem->description
            ];
          })
        ];
    }
}
