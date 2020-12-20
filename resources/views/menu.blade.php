<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Foodies - Restaurant Category Responsive Web Template - Menu : W3Layouts</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css')}}">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        <i class="fa fa-cutlery" aria-hidden="true"></i> Foodies
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- search button -->
                <div class="search-right">
                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Here Your Favourite Food
                            </h4>
                            <form action="#search" method="GET" class="search-box">
                                <div class="input-search"> <span class="fa fa-search mr-2"
                                        aria-hidden="true"></span><input type="search" placeholder="Enter Keyword"
                                        name="search" required="required" autofocus="">
                                </div>
                                <button type="submit" class="btn button-style">Search</button>
                            </form>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- //search popup -->
                </div>
                <!-- //search button -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Foodies Menu</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Menu</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- menu -->
    <div class="menu-w3ls py-5" id="menu">
        <div class="container py-md-4 py-3">
            <h3 class="title-big mb-2">Breakfast</h3>
            <div class="row menu-body">
                <!-- Section starts: Breakfast -->
                <div class="col-lg-6 menu-section">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu1.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Tomato Toast “Ricotta”</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$36</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu2.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Avocado Toast with Egg</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$28</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu3.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Nut, Banana & Seed Toast</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$18</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu4.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Berry & Yogurt Smoothie</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$76</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Breakfast -->

                <!-- Section starts: Breakfast -->
                <div class="col-lg-6 menu-section pl-lg-5">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu5.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Berry Breakfast Parfait</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$13</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu6.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Peanut Butter & Banana</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$32</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu7.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Quinoa Fruit Salad</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$76</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ asset('assets/images/menu8.jpg')}}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Pumpkin Yogurt Parfait</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$26</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Breakfast -->
            </div>

            <div class="another-sec">
                <h3 class="title-big mb-2">Lunch</h3>
                <div class="row menu-body">
                    <!-- Section starts: Lunch -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu9.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Grilled Lamb & Feta Pita</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$63</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu10.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>The Ultimate Veggie</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$36</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu11.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Chicken Salad Lunch Box</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$23</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                    </div>
                    <!-- Section ends: Lunch -->

                    <!-- Section starts: Lunch -->
                    <div class="col-lg-6 menu-section pl-lg-5">
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu12.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Coriander Chicken and Rice</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$46</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu13.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>The plate of barbeque</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$26</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu14.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Chicken grill with sauce</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$67</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                    </div>
                    <!-- Section ends: Lunch -->
                </div>
            </div>

            <div class="another-sec">
                <h3 class="title-big mb-2">Dinner</h3>
                <div class="row menu-body">
                    <!-- Section starts: Dinner -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu10.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>The Ultimate Veggie</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$52</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu14.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Chicken grill with sauce</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$46</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu7.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Quinoa Fruit Salad</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$56</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                    </div>
                    <!-- Section ends: Dinner -->

                    <!-- Section starts: Dinner -->
                    <div class="col-lg-6 menu-section pl-lg-5">
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu2.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Avocado Toast with Egg</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$26</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu1.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Tomato Toast Ricotta</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$26</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                        <!-- Item starts -->
                        <div class="row menu-item">
                            <div class="col-3 p-0 position-relative">
                                <img src="{{ asset('assets/images/menu9.jpg')}}" class="img-responsive" alt="">
                                <a href="#order" class="btn button-style button-style-2">Add</a>
                            </div>
                            <div class="col-9 pl-4">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>Grilled Lamb & Feta Pita</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>$72</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
                    </div>
                    <!-- Section ends: Dinner -->
                </div>
            </div>
        </div>
    </div>
    <!-- //menu -->
    <!-- promocode section -->
    <section class="w3l-promocode">
        <div class="promo-block pt-md-0 pt-4">
            <div class="container">
                <div class="row aap-4-section">
                    <div class="col-lg-6 app4-right-image">
                        <img src="{{ asset('assets/images/img3.png')}}" class="img-responsive" alt="App Device" />
                    </div>
                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-sm-2 mb-4">
                        <h6>For 30% Discount</h6>
                        <h4>Get Our Promocode Now</h4>
                        <p class="mb-4"> Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                            sapien. Proin a
                            diam et dui fermentum molestie vel id neque. </p>
                        <div class="app-4-connection">
                            <div class="newsletter">
                                <label>Never Miss a Deal From Foodies</label>
                                <form action="#" methos="GET" class="d-flex wrap-align">
                                    <input type="email" placeholder="Enter your email id" required="required" />
                                    <button type="submit">Get Promocode</button>
                                </form>
                            </div>
                            <p class="mobile-text-app mt-4 pt-2">(Or) To Get Our Mobile Apps</p>
                            <div class="app-4-icon">
                                <ul>
                                    <li><a href="#url" title="Apple" class="app-icon apple-vv"><span class="fa fa-apple"
                                                aria-hidden="true"></span></a></li>
                                    <li><a href="#url" title="Google play" class="app-icon play-vv"><span
                                                class="fa fa-play" aria-hidden="true"></span></a></li>
                                    <li><a href="#url" title="Microsoft" class="app-icon windows-vv"><span
                                                class="fa fa-windows" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //promocode section -->
    <!-- footer -->
    <section class="w3l-footer-16">
        <div class="w3l-footer-16-main">
            <div class="container">
                <div class="row footer-p">
                    <div class="col-lg-4 pr-lg-5">
                        <a class="logo" href="index.html"><i class="fa fa-cutlery" aria-hidden="true"></i>
                            Foodies</a>
                        <p class="mt-4">Duis imperdiet sapien tortor, vitae congue diam auctor vitae. Aliquam
                            eget turpis ornare, euismod ligul aeget, enenatis dui. </p>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <h3>Pages</h3>
                        <div class="row">
                            <div class="col-6 column">
                                <ul class="footer-gd-16">
                                    <li><a href="index.html"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Home</a></li>
                                    <li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About
                                            Us</a></li>
                                    <li><a href="#services"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Services</a></li>
                                    <li><a href="#blog"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog
                                            Posts</a></li>
                                    <li><a href="contact.html"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-6 column pl-0">
                                <ul class="footer-gd-16">
                                    <li><a href="menu.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Foodies
                                            Menu</a></li>
                                    <li><a href="#privacy"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy
                                            Policy</a></li>
                                    <li><a href="#terms"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms
                                            and
                                            conditions</a></li>
                                    <li><a href="#faq"><i class="fa fa-angle-right" aria-hidden="true"></i>FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 column mt-lg-0 mt-4">
                        <h3>Newsletter </h3>
                        <div class="end-column">
                            <h3>Subscribe Here Now</h3>
                            <form action="#" class="subscribe" method="post">
                                <input type="email" name="email" placeholder="Email Address" required="">
                                <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                            </form>
                            <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
                    <div class="columns text-lg-left">
                        <p class="copy-text">@ 2020 Foodies. All rights reserved. Design by <a
                                href="https://w3layouts.com/" target="_blank">
                                W3Layouts</a>
                        </p>
                    </div>
                    <div class="columns-2 mt-md-0 mt-3">
                        <ul class="social">
                            <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('assets/js/theme-change.js')}}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>