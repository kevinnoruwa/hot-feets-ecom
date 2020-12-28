@extends('layouts/main')

@section('content')
    <section id="appareal-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Appareal</h2>
                <p>Shop Hot Feets exclusive apparel collection </p>
            </div>
            <div class="shoe-img">
                <img src="https://i.postimg.cc/nLJF5H6w/apparel-bg.png" alt="">
            </div>
         
        </div>
    </section>
    <section id="all-appareal">
        <div class="header">
            <span class="title">Appareal</span>
        </div>
        <div class="content">
            <div class="inside">
                @foreach($clothes as $cloth)
            <a href="/apparel/{{$cloth->id}}">
                <div class="shoe-box">
                    <div class="shoe-img">
                    <img src="{{$cloth->image}}" alt="">
                    </div>
                    <div class="details">
                        <div>{{$cloth->name}}</div>
                        <div>${{$cloth->price}}.00</div>
                    </div>
                </div>
            </a>
               
                @endforeach
            </div>
        </div>
    </section>
    

@endsection