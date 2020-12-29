<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Cart extends Model
{
    use HasFactory;


    public static function userCartItems(){
        $userCartItems = Cart::where('session_id', Session::get('session_id'))->get()->toArray();
        return $userCartItems;
    }
    
    // public function product(){
    //         return  $this->belongsTo('App\Models\nikes','product_id');
    //     }


    public static  function  getProductAttrPrice($product_id, $size){
        $attrPrice = Cart::select('price')->where(['product_id' => $product_id, "size" => $size])->first()->toArray();

        return $attrPrice['price'];
    }
}
