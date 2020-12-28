@extends('layouts/main')



@section('content')
    <section id="banner-section">
        <div class="inside">
            <div class="banner-box">
                <div class="inside-box">
                    <li class="highlight">Hot Feets</li>
                    <hr class="hr">
                    <li class="box-header">We have the best gear</li>
                    <li class="small-text">Good deals & nice feets</li>
                    <li class="shop-now">
                        <a href="/allShoes">SHOP NOW</a>
                    </li>
                </div>
            </div>

        </div>
    </section>
    <section id="new-arrivals">
        <div class="header">
            <span class="title">New arrivals</span>
            <a href="/new-arrivals">
                <span> See All</span>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>    
            </a>
        </div>
        <div class="shoes">
            <div class="container">
                @foreach($newShoes as $shoe)
            <a href="/new-arrivals/{{$shoe->id}}">
                <div class="shoe-box">
                    <div class="shoe-img">
                    <img src="{{$shoe->image}}" alt="shoe">
                    </div>
                   <div class="shoe-details">
                        <li>{{$shoe->name}}</li>
                        <li>"{{$shoe->nickname}}"</li>
                        <li class="highlight">${{$shoe->price}}.00</li>
                   </div>
                </div>
            </a>
                @endforeach
            </div>
        </div>
    </section>
    <section id="apparel-extras">
        <div class="container">
            <div class="content">
                <div class="img-box">
                    <div class="img">
                        <img src="https://i.postimg.cc/TPJdvzx2/appareal-home-pg-img.png" alt="">
                    </div>
                    <div class="details-box">
                        <div class="contain">
                            <li class="highlight">Hot Feets</li>
                            <hr class="hr">
                            <li class="box-header">Apparel</li>
                            <p class="small-text">Your chance to grab some nice clothes to match with your new shoes</p>
                            <li class="shop-now">
                                <a href="/apparel">Shop</a>
                            </li>
                        </div>
                     
                    </div>
                </div>
                <div class="img-box-2">
                    <div class="img">
                        <img src="https://i.postimg.cc/6369WM6r/extra-home-page-img.png">
                    <div class="details-box">
                        <div class="contain">
                            <li class="highlight">Hot Feets</li>
                            <hr class="hr">
                            <li class="box-header">Extras</li>
                            <p class="small-text">In need of some new laces or new shoe essentials? We got you. </p>
                            <li class="shop-now">
                                <a href="/extras">Shop</a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="appareal">
        <div class="header">
            <span class="title">Appareal</span>
            <a href="/apparel">
                <span>See All</span>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="cloths"> 
            <div class="container"> 
                @foreach($clothes as $cloth)
            <a href="/apparel/{{$cloth->id}}">
                <div class="clothes-box">
                    <div class="img">
                    <img src="{{$cloth->image}}" alt="">
                    <div class="details">
                        <li>{{$cloth->name}}</li>
                        <li class="highlight">${{$cloth->price}}.00</li>
                    </div>
                </div>
            </div>
            </a>
       
         @endforeach 

           
        </div>
    </div>              
</section>
@endsection