

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/main.css">
 
    <title>Hot Feets</title>
</head>
<body>
    <header>
        <div class="inside">
            <div class="header-title-cart">
                <div class="menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <a href="/">
                    <h1>
                        <span>HOT FEETS</span>
                        <span class="r-symbol">&reg;</span>
                    </h1>

                </a>
                <a href="/shopping-cart">
                    <div class="cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
            
                </a>  
            </div>
            <hr class="hr">
        </div>
    </header>
    <div class="header-nav">
        <ul>
            <li class="shoes">
                <a class="shoes-link"href="/allShoes">Shoes</a>
            </li>
            <li>
                <a href="/apparel"> Apparel</a>
             
            </li>
            <li>
                <a href="/extras">Extras</a> 
            </li>
        </ul>

    </div>

    <div class="inside-shoes">
        <div class="container">
            <a href="/nike">Nike</a>
            <a href="/jordan">Jordan</a>
            <a href="/adidas">Adidas</a>
            <a href="/puma">Puma</a>
        </div>
    </div>
    @yield('content')

    
    <section id="newsletter-section">
        <div class="inside">
            <div class="details-box">
                <p>Be the first one to hear about new releases, and special deals</p>
    
                <input type="text" placeholder="Email Address">
                <a class="sign-up-btn" href="#">Sign up</a>
            </div>
            <div class="border"></div>
            <div class="details-box">
                <a class=" refer" href="#">Refer to a friend</a>
            </div>
        </div>
    </section>

    <section id="mobil">
        <div class="icon">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul class="inside">
            <li> 
                <a href="/">Home</a>
            </li>
            <li> 
                <a href="/allShoes">All Shoes</a>
            </li>
            <li>
                <a href="/jordan">Jordans</a>
            </li>
            <li>
                <a href="/adidas">Adidas</a>
            </li>
            <li>
                <a href="/nike">Nike</a>
            </li>
            <li>
                <a href="/puma">Puma</a>
            </li>
            <li>
                <a href="/apparel">Apparel</a>
            </li>

            <li>
                <a href="/extras">Extras</a>
            </li>

        </ul>
    </section>

    <section id="filter"></section>
    <footer>
        <div class="container">
            <div class="about-us">
                <h3 class="title">ABOUT US</h3>
                <li>Our Mission</li>
                <li>Locations</li>
                <li>Careers</li>
                <li>journal</li>
            </div>
            <div class="Support">
                <h3 class="title">SUPPORT</h3>
                <li>FAQs</li>
                <li>Accessibility</li>
                <li>Delivery & Returns</li>
                <li>Track Your Order</li>    
            </div>
            <div class="extra">
                <h3 class="title">Connect with us</h3>
                <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
    
            </div>
        </div>
        <div class="mobil-extra">
            <h3 class="title">Connect with us</h3>
            <i class="fa fa-pinterest-square" aria-hidden="true"></i>
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>

        </div>
    
    </footer>


        <script src="/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/owl.js"></script>
        <script src="/js/jquery.js"></script>
    </body>
    </html>