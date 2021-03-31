<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TonyStore</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.0/css/pro.min.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body onscroll="fixMenu()">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="slogan">
                        Welcome You To My Store!
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="function" id="accordionTop">
                        <ul class="header-social">
                            <li>
                                <a href="https://www.facebook.com/Lexuandai2311/"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/Dai.png/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fal fa-envelope"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                        <a data-toggle="collapse" href="#collapseMoney" role="button" aria-expanded="false"
                            aria-controls="collapseMoney" id="none">
                            <span id="changeMoney"><i class="fal fa-dollar-sign"></i> USD</span>
                            <div class="sub-function">
                                <div class="collapse" id="collapseMoney" data-parent="#accordionTop">
                                    <div class="content">
                                        <ul>
                                            <li id="chooseUSD"><i class="fal fa-dollar-sign"></i> USD</li>
                                            <li id="chooseEUR"><i class="fal fa-euro-sign"></i> EUR</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a data-toggle="collapse" href="#collapseLanguage" role="button" aria-expanded="false"
                            aria-controls="collapseLanguage" id="none">
                            <span id="changeLang"><i class="fad fa-language"></i> english</span>
                            <div class="sub-function">
                                <div class="collapse" id="collapseLanguage" data-parent="#accordionTop">
                                    <div class="content">
                                        <ul>
                                            <li id="chooseEnglish">english</li>
                                            <li id="chooseGermany">germany</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="scrollMenu" class="header-line">
        <div class="container-fluid">
            <div class="row row-align">
                <div class="col-xl-2">
                    <div class="logo">
                        TONY <span>CODER</span>
                    </div>
                </div>
                <div class="col-xl-4">
                    <nav>
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="index.php">shop</a></li>
                            <li><a href="index.php">pages</a></li>
                            <li><a href="index.php">blog</a></li>
                            <li><a href="">contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4">
                    <div class="search">
                        <input type="text" placeholder="Search at here...">
                        <button><i class="fal fa-search"></i></button>
                    </div>
                </div>
                <div class="col-xl-1">
                    <div class="user">
                        <a href="layout/signin.php"><i class="fal fa-user"></i></a>
                    </div>

                </div>
                <div class="col-xl-1">
                    <div class="cart">
                        <a href="app/controllers/checkout.php"><i class="fal fa-shopping-cart"></i></a>
                        <span class="item_count">0</span>
                        <span class="item_total">$0.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="slide-show owl-carousel owl-theme">
            <div class="item">
                <div class="__banner">
                    <img src="public/images/sample-1.jpg" alt="">
                    <div class="info">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5">
                                    <h6>NOT FRIED NOT BAKED</h6>
                                    <h1>Freeze Dried Fruits Pineapple Coconut</h1>
                                    <h2>Free Shipping On Qualified Orders Over $35</h2>
                                    <a href="">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="__banner">
                    <img src="public/images/sample-2.jpg" alt="">
                    <div class="info">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5">
                                    <h6>100% NATURAL</h6>
                                    <h1>Organic Fruits Summer Drinks</h1>
                                    <h2>fresh New pack Brusting Fruits</h2>
                                    <a href="">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

			
        <?php
            if(file_exists($controller))
                include $controller;
        ?>            
	


    <footer>
        <div class="container">
            <div class="__footer">
                <div class="left">
                    <div class="logo">
                        HCJ <span>CODER</span>
                    </div>
                    <h6>
                        We are a team of designers and developers that create high quality HTML template
                    </h6>
                    <div class="social-media">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <h6>
                        Design by HCJ coder
                    </h6>
                </div>
                <div class="right">
                    <div class="row">
                        <div class="col-6 col-xl-3">
                            <div class="title-footer">
                                Information
                            </div>
                            <div class="menu-footer">
                                <ul>
                                    <li><a href="">Delivery</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Secure Payment</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Sitemap</a></li>
                                    <li><a href="">Stores</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="title-footer">
                                Custom Links
                            </div>
                            <div class="menu-footer">
                                <ul>
                                    <li><a href="">Legal Notice</a></li>
                                    <li><a href="">Prices Drop</a></li>
                                    <li><a href="">New Products</a></li>
                                    <li><a href="">Best Sales</a></li>
                                    <li><a href="">Login</a></li>
                                    <li><a href="">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="title-footer">
                                NewsLetter
                            </div>
                            <h6>You may unsubscribe at any moment. For that purpose, please find our contact info in the
                                legal notice.</h6>
                            <div class="email-footer">
                                <input type="text" placeholder="Enter your email here">
                                <button>Sign up</button>
                            </div>
                            <div class="app">
                                <a href=""><img src="public/images/app_store.png" alt=""></a>
                                <a href=""><img src="public/images/google_play.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="payment">
                                <a href=""><img src="public/images/payment.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
    
</body>
</html>