@extends('layouts/main')

@section('content')
    <section id="shoe-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Shoes</h2>
                <p>See the latest creations and classic styles from Nike, Jordan, Adidas, and more.</p>
            </div>
            <div class="shoe-img">
                <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D1200/media/catalog/category/Air_Jordan_1_Category.jpg" alt="">
            </div>
         
        </div>
    </section>
    <section id="shoes">
        <div class="header">
            <span class="title">Shoes</span>
        </div>
        <div class="content">
            <div class="inside">
                @foreach($nike  as $shoe)
                <a href="/nike/{{$shoe->id}}">
                    <div class="shoe-box">
                        <div class="shoe-img">
                        <img src="{{$shoe->image}}" alt="">
                        </div>
                        <div class="details">
                            <div>{{$shoe->name}}</div>
                            <div>{{$shoe->nickname}}</div>
                            <div>${{$shoe->price}}.00</div>
                        </div>
                    </div>

                </a>
              
                @endforeach
                @foreach($jordan as $shoe)
                <a href="/jordan/{{$shoe->id}}">
                    <div class="shoe-box">
                        <div class="shoe-img">
                            <img src="{{$shoe->image}}" alt="">
                        </div>
                        <div class="details">
                            <div>{{$shoe->name}}</div>
                            <div>{{$shoe->nickname}}</div>
                            <div>${{$shoe->price}}.00</div>
                        </div>
                    </div>
                </a>
                @endforeach
                @foreach($adidas as $shoe)
                <a href="/adidas/{{$shoe->id}}">
                    <div class="shoe-box">
                        <div class="shoe-img">
                            <img src="{{$shoe->image}}" alt="">
                        </div>
                        <div class="details">
                            <div>{{$shoe->name}}</div>
                            <div>{{$shoe->nickname}}</div>
                            <div>${{$shoe->price}}.00</div>
                        </div>
                    </div>
                </a>
                @endforeach
                @foreach($puma as $shoe)
                <a href="/puma/{{$shoe->id}}">
                    <div class="shoe-box">
                        <div class="shoe-img">
                            <img src="{{$shoe->image}}" alt="">
                        </div>
                        <div class="details">
                            <div>{{$shoe->name}}</div>
                            <div>{{$shoe->nickname}}</div>
                            <div>${{$shoe->price}}.00</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    

@endsection