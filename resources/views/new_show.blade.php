@extends('layouts/main')


@section('content')
    <section id="show-section">
        <div class="breadcrumbs"> 
            <a href="/">Home</a>
            <span>/</span>
            <a href="/new-arrivals">New</a>
            <span>/</span>
            <span>{{$shoe->name}}</span>
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
                <input type="hidden" name="product_id" value={{$shoe->id}}>
                <input type="hidden" name="brand" value="{{$shoe->brand}}">
                <input type="hidden" name="name" value="{{$shoe->name}}">
                <input type="hidden" name="price" value="{{$shoe->price}}">
                <input type="hidden" name="image" value="{{$shoe->image}}">

 
                <div class="inside">
                    <div class="shoe-img">
                    <img src="{{$shoe->image}}" alt="">
                    </div>
                    <div class="show-info">
                        <h3 class="brand">{{$shoe->brand}}</h3>
                        <div class="name">{{$shoe->name}}</div>
                        <div class="nickname">{{$shoe->nickname}}</div>
                        <div class="price">${{$shoe->price}}.00</div>
                        <input max={{10}} min={{1}} placeholder="Qty." type="number" name="quantity" >
                        <div class="select">
                            <select name="size" id="" required>
                                <option value="" disabled selected>--Select a Size--</option>
                                <option value="{{6}}">size - 6 </option>
                                <option value="{{7}}">size - 7</option>
                                <option value="{{8}}">size - 8</option>
                                <option value="{{9}}">size - 9</option>
                                <option value="{{10}}">size - 10</option>
                                <option value="{{11}}">size - 11</option>
                                <option value="{{12}}">size - 12</option>
                                <option value="{{13}}">size - 13</option>
                            </select>
                            <button class="submit">ADD TO CART</button>

                        </div>
                        <hr class="hr">
                        <div class="details">
                            <h3>Details</h3>
                        <p>{{$shoe->description}}</p>
                        </div>

                    </div>
                </div>
        </form>
    </section>
    {{-- <section id="extras">
        <h2 class='title'>You May Also Like </h2>
        <div class="container">
            <div class="owl-carousel owl-theme">
                @foreach($footwear as $shoe)
                <a href="/new-arrivals/{{$shoe->id}}">
                    <div class="item shoe">
                        <img src="{{$shoe->image}}" alt="">
                            <div class="details">
                                <p>{{$shoe->name}}</p>
                                <span>${{$shoe->price}}.00</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
           
    </section> --}}


   
@endsection