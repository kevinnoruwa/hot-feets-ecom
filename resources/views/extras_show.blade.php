@extends('layouts/main')


@section('content')
    <section id="extra-show-section">
        <div class="breadcrumbs"> 
            <a href="/">Home</a>
            <span>/</span>
            <a href="/extras">{{$extras->brand}}</a>
            <span>/</span>
            <span>{{$extras->name}}</span>
        </div>
        @if(Session::has('success_message'))
        <div class="alert">
            {{Session::get('success_message')}}
        </div>
        @endif
        @if(Session::has('error_message'))
        <div class="red-alert">
            {{Session::get('error_message')}}
        </div>
        @endif
        <form action="/add-to-cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value={{$extras->id}}>
            <input type="hidden" name="brand" value="{{$extras->brand}}">
            <input type="hidden" name="name" value="{{$extras->name}}">
            <input type="hidden" name="price" value="{{$extras->price}}">
            <input type="hidden" name="image" value="{{$extras->image}}">
            <input type="hidden" name="size" value="none">
            <div class="inside">
                <div class="extras-img">
                <img src="{{$extras->image}}" alt="">
                </div>
                <div class="show-info">
                    <h3 class="brand">{{$extras->brand}}</h3>
                    <div class="name">{{$extras->name}}</div>
                    <div class="nickname">{{$extras->nickname}}</div>
                    <div class="price">${{$extras->price}}.00</div>
                    <input max={{10}} min={{1}} placeholder="Qty." type="number" name="quantity" >
                    <div class="select">
                        <button class="submit">ADD TO CART</button>
                    </div>
                    <hr class="hr">
                    <div class="details">
                        <h3>Details</h3>
                    <p>{{$extras->description}}</p>
                    </div>

                </div>
   
            </div>
        </form>
    </section>
   

   
@endsection