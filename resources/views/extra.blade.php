@extends('layouts/main')

@section('content')
    <section id="shoe-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Extras</h2>
                <p>Find all your needed shoe essentials </p>
            </div>
            <div class="shoe-img">
                <img src="https://i.postimg.cc/rsKMWzrz/extrass-bg.png" alt="">
            </div>
         
        </div>
    </section>
    <section id="extras-item">
        <div class="header">
            <span class="title">Extras</span>
        </div>
        <div class="content">
            <div class="inside">
                @foreach($extras as $item)
            <a href="/extras/{{$item->id}}">
                    <div class="shoe-box">
                        <div class="shoe-img">
                        <img src="{{$item->image}}" alt="">
                        </div>
                        <div class="details">
                            <div>{{$item->name}}</div>
                            <div>${{$item->price}}.00</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    

@endsection