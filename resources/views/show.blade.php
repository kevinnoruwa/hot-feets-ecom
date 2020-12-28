@extends('layouts/main')


@section('content')
    <section id="show-section">
        <div class="breadcrumbs"> 
            <a href="/">Home</a>
            <span>/</span>
            <a href="#">Adidas</a>
            <span>/</span>
            <span>Name</span>
        </div>
            <div class="inside">
                <div class="shoe-img">
                    <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D720/media/catalog/product/F/Z/FZ1270_1.png" alt="">
                </div>
                <div class="show-info">
                    <h3 class="brand">Adidas</h3>
                    <div class="name">Yeezy Boost 380 </div>
                    <div class="nickname">Onyx</div>
                    <div class="price">$225</div>
                    <div class="select">
                        <select name="" id="">
                            <option value="">size - 6 </option>
                            <option value="">size - 7</option>
                            <option value="">size - 8</option>
                            <option value="">size - 9</option>
                            <option value="">size - 10</option>
                            <option value="">size - 11</option>
                            <option value="">size - 12</option>
                            <option value="">size - 13</option>
                        </select>
                        <button class="submit">ADD TO CART</button>

                    </div>
                    <hr class="hr">
                    <div class="details">
                        <h3>Details</h3>
                        <p>The adidas Yeezy Boost 380 “Onyx” is a November 2020 release of the evolutionary silhouette that features a low-contrast colorway. Images of the Yeezy Boost 380 “Onyx” initially surfaced in December of 2019, though sneaker collectors would ultimately have to wait almost an entire year for adidas to officially launch the shoe. Worth the wait, the sock-like Primeknit upper features a brown and black digi camo-like appearance. Perforations located on either side allow for constant airflow to the foot when worn. A black monofilament side stripe runs across the upper. The brown accenting on the collar is contrasted by black shoe laces. Adidas’s Boost cushioning technology is encased within the semi-translucent gum midsole to provide the wearer with optimal comfort. Release date: November 27, 2020.</p>
                    </div>

                </div>
   
            </div>
    </section>
    <section id="extras">
        <h2 class='title'>You May Also Like </h2>
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item shoe">
                    <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D800/media/catalog/product/F/X/FX9035_1.png" alt="">
                    <div class="details">
                        <p>Air Jordan 5 retro</p>
                        <span>$299.00</span>
                    </div>
                </div>
                <div class="item shoe">
                    <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D800/media/catalog/product/F/X/FX9035_1.png" alt="">
                    <div class="details">
                        <p>Air Jordan 5 retro</p>
                        <span>$299.00</span>
                    </div>

                </div>
                <div class="item shoe">
                    <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D800/media/catalog/product/F/X/FX9035_1.png" alt="">
                    <div class="details">
                        <p>Air Jordan 5 retro</p>
                        <span>$299.00</span>
                    </div>

                </div>
                <div class="item shoe">
                    <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit%3Dcontain%2Cformat%3Dauto%2Cwidth%3D800/media/catalog/product/F/X/FX9035_1.png" alt="">
                    <div class="details">
                        <p>Air Jordan 5 retro</p>
                        <span>$299.00</span>
                    </div>
                </div>
            </div>

        </div>
           
    </section>


   
@endsection