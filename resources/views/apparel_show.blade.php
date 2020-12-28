@extends('layouts/main')


@section('content')
    <section id="apparel-show-section">
        <div class="breadcrumbs"> 
            <a href="/">Home</a>
            <span>/</span>
            <a href="/apparel">Apparel</a>
            <span>/</span>
            <span>{{$cloth->name}}</span>
        </div>
        @if(Session::has('success_message'))
        <div class="alert" style="margin-top: 20px;">
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
                <input type="hidden" name="product_id" value={{$cloth->id}}>
                <input type="hidden" name="brand" value="{{$cloth->brand}}">
                <input type="hidden" name="name" value="{{$cloth->name}}">
                <input type="hidden" name="price" value="{{$cloth->price}}">
                <input type="hidden" name="image" value="{{$cloth->image}}">
                <div class="inside">
                    <div class="cloth-img">
                    <img src="{{$cloth->image}}" alt="">
                    </div>
                    <div class="show-info">
                        <h3 class="brand">{{$cloth->brand}}</h3>
                        <div class="name">{{$cloth->name}}</div>
                        <div class="nickname">{{$cloth->nickname}}</div>
                        <div class="price">${{$cloth->price}}.00</div>
                        <input max={{10}} min={{1}} placeholder="Qty." type="number" name="quantity" >
                        <div class="select">
                            <select name="size" id="" required>
                                <option value="" disabled selected>--Select a Size--</option>
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                            <button class="submit">ADD TO CART</button>
                        </div>
                        <hr class="hr">
                        <div class="details">
                            <h3>Details</h3>
                        <p>{{$cloth->description}}</p>
                        </div>

                    </div>
    
                </div>
        </form>
    </section>
    {{-- <section id="extras">
        <h2 class='title'>You May Also Like </h2>
        <div class="container">
            <div class="owl-carousel owl-theme">
                @foreach($footwear as $cloth)
                <a href="/new-arrivals/{{$cloth->id}}">
                    <div class="item cloth">
                        <img src="{{$cloth->image}}" alt="">
                            <div class="details">
                                <p>{{$cloth->name}}</p>
                                <span>${{$cloth->price}}.00</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
           
    </section> --}}


   
@endsection