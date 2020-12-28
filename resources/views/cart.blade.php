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
                    @forEach($products as $product)
                    <li>
                        <div class="container">
                            <div class="item-img">
                            <img src="{{$product->image}}" alt="">
                            </div>
                            <div class="item-details">
                                <h6 class="name">{{$product->name}}</h6>
                            <input max={{10}} min={{1}} type="number" placeholder="Qty: {{$product->quantity}}" disabled >
                                <span class="highlight dlt-btn">Delete</span>
                            </div>
                            <div class="item-price">
                                <span class="highlight">${{$product->price * $product->quantity }}</span>
                            </div>
                        </div>
                    </li>
                    @endforEach
                </ul>
            </div>
            <div class="total-box">
            <span>{{count($products) >  0 ? "Subtotal" : null }}({{count($products)}} {{count($products) !== 1 ? "items" : "item"}}): 
            <span class="highlight">$500</span>
                </span>
                <button class="btn-submit">Proceed to Buy</button>
            </div>
        </div>
    </section>
    

@endsection