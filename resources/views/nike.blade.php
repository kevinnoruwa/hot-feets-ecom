@extends('layouts/main')

@section('content')
    <section id="shoe-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Nike</h2>
                <p>From classic to latest pairs, the Swoosh stays on the cutting edge. </p>
            </div>
            <div class="shoe-img">
                <img src="https://i.postimg.cc/CK2dxgDY/nike-bg.png" alt="">
            </div>
         
        </div>
    </section>
    <section id="shoes">
        <div class="header">
            <span class="title">Nike</span>
        </div>
        <div class="content">
            <div class="inside">
                @foreach($shoes as $shoe)
                <a href="/Nike/{{$shoe->id}}">
                    <div class="shoe-box">
                        <div class="shoe-img">
                        <img src="{{$shoe->image}}" alt="">
                        </div>
                        <div class="details">
                            <div>{{$shoe->name}}</div>
                            <div>"{{$shoe->nickname}}"</div>
                            <div>${{$shoe->price}}.00</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    

@endsection