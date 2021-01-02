<?php 

use App\Models\Cart;

?>


@extends('layouts/main')

@section('content')
    <section id="cart">
        <div class="inside">
            <div class="items">
                <h4 class="header">Shopping Cart</h5>
                    @if(Session::has('error_message'))
                    <div class="cart-alert">
                        {{Session::get('error_message')}}
                    </div>
                    @endif
                <ul>
                    <?php $totalPrice = 0?>

                  

                

                  @foreach($items as $item)
                  <?php $attrPrice = Cart::getProductAttrPrice($item['product_id'], $item['size']); ?>

                 
       

                    <li>
                        <div class="container">
                            <div class="item-img">
                            <img src="{{$item['product']['image']}}" alt="">
                            </div>
                            <div class="item-details">
                                <h6 class="name">{{$item['product']['name']}}</h6>
                            <input  max={{10}} min={{1}} type="number" placeholder="Qty: {{$item['quantity']}} " disabled >
                                <form action="/item/{{$item['id']}}" method="post">

                                    @csrf 
                                    <input type="hidden" name="_method" value="delete">
                                    <input value="delete" type="submit" class="highlight dlt-btn">
    
                                </form>
                               
                            </div>
                            <div class="item-price">
                                <span class="highlight">${{$item['product']['price'] * $item['quantity']   }}</span>
       
       
                            </div>
                        </div>
                    </li>

                    <?php $totalPrice = $totalPrice + $attrPrice  * $item['quantity']?>
                    @endforeach
                 
                </ul>
            </div>
            <div class="total-box">
            <span>
                {{count($items) >  0 ? "Subtotal" : null }}( {{count($items)}} {{count($items) !== 1 ? "items" : "item"}} ): 
                <span class="highlight">${{$totalPrice}}</span>
            </span>
                <button class="btn-submit">Proceed to Buy</button>
            </div>
        </div>
    </section>
    

@endsection