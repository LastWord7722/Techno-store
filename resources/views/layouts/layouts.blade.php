
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta -->
    @vite(['resources/css/app.css'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title For This Document -->
    <title> Karte - Multipurpose E-Commerce Html Template</title>
    <!-- Favicon For This Document -->
    <link rel="shortcut icon" href={{asset("plugins/images/logo/favicon-32x32.png")}} type="image/x-icon">
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" href={{asset("plugins/css/bootstrap.5.1.1.min.css")}}>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Rubik:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/5db38fd61b.css" crossorigin="anonymous">

    <!-- FlatIcon Css -->
    <link rel="stylesheet" href={{asset("plugins/fonts/flaticon.css")}}>

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href={{asset("plugins/css/plugin/slick.css")}}>
    <!--  Ui Tabs Css -->
    <link rel="stylesheet" href={{asset("plugins/css/plugin/jquery-ui.min.css")}}>
    <!-- Magnific-popup Css -->
    <link rel="stylesheet" href={{asset("plugins/css/plugin/magnific-popup.css")}}>
    <!-- Nice Select Css -->
    <link rel="stylesheet" href={{asset("plugins/css/plugin/nice-select.v1.0.css")}}>
    <!-- Animate Css -->
    <link rel="stylesheet" href={{asset("plugins/css/plugin/animate.css")}}>
    <!-- Style Css -->
    <link rel="stylesheet" href={{asset("plugins/css/style.css")}}>

</head>

<body class="fashon">

<!-- ==========Preloader========== -->
<div class="loader"><span>Karte...</span></div>
<!-- ==========Preloader========== -->

<!--===scroll bottom to top===-->
<a href="#0" class="scrollToTop"><i class="flaticon-up-arrow"></i></a>
<!--===scroll bottom to top===-->

<!-- header-default start -->
<header class="header-style-1 fashonheader ">
    <div class="menubox fashonmenu fashonmenucommon">
        <!-- Start Desktop Menu -->
        <div class="top-info d-flex">
            <div class="container">
                <div class="row g-0 ">
                    <div class="col-12">
                        <div class="top-info__top-content d-flex align-items-center justify-content-between">
                            <div class="medio-boxx">
                                <ul>
                                    <li> <a href="#" target="_blank"><i
                                                    class="flaticon-facebook-app-symbol"></i></a> </li>
                                    <li> <a href="#" target="_blank"><i
                                                    class="flaticon-youtube"></i></a> </li>
                                    <li> <a href="#" target="_blank"><i
                                                    class="flaticon-twitter"></i></a> </li>
                                    <li> <a href="#" target="_blank"><i
                                                    class="flaticon-instagram"></i></a> </li>
                                </ul>
                            </div>

                            <a class="text-white" href="#0">  Донатим на ЗСУ </a>
                            <div class=" d-flex align-items-center ">
                                <div class="language currency"> <select>
                                        <option>USD</option>
                                        <option value="1">INR</option>
                                        <option value="2">BDT</option>
                                    </select> </div>
                                <div class="language"> <select>
                                        <option>ENGLISH </option>
                                        <option value="1">GERMAN</option>
                                        <option value="4">FRENCH</option>
                                    </select> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu d-lg-none d-block ">
            <div class="mobile-menu__menu-top border-bottom-0">
                <div class="container ">
                    <div class="row">
                        <div class="menu-info d-flex justify-content-between align-items-center">
                            <div class="menubar"> <span></span> <span></span> <span></span> </div>
                            <a href="#" class="logo"> <img src={{asset("plugins/images/logo/logo-4.png")}} alt=""> </a>
                            <div class="cart-holder">
                                <a href="#0" #>
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-closer"></div>
            <div class="mobile-menu__sidebar-menu">
                <div class="menu-closer two"> <span> Close Menu</span> <span class="cross"><i
                                class="flaticon-cross"></i></span> </div>
                <div class="search-box-holder">
                    <form action="#0">
                        <div class="form-group search-box menu"> <input type="text" class="form-control"
                                                                        placeholder="Search for products"> <span class="search-icon"> <i
                                        class="flaticon-magnifying-glass"></i> </span> </div>
                    </form>
                </div>
                <!-- БЛОК С ТЕКСТОМ -->
                <ul class="page-dropdown-menu">
                    <li class="dropdown-list"> <a href="#0"> # Главная1 </span> <span class="menuarrow"> <i
                                        class="flaticon-next-1"></i> </span> </a></li>
                {{--SHOP--}}
                    <li class="dropdown-list"> <a href="#0"> # Бренды </span> <span class="menuarrow"> <i
                                        class="flaticon-next-1"></i> </span> </a>
                        <ul class="dropdown">
                            <li class="subhed position-relative"> <a href="#0"> #Shop Details Style </span>
                                    <span class="menuarrowtwo"> <i class="flaticon-next-1"></i> </span> </a>
                                <ul class="subdropdown">
                                    <li> <a href="#">Shop Details 01</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#"> Shop Grid</a> </li>
                            <li> <a href="#">Shop Grid Left Sidebar</a> </li>
                            <li> <a href="#">Shop Grid Right Sidebar</a> </li>
                            <li> <a href="#">Shop List Right Sidebar</a> </li>
                            <li> <a href="#">Shop LIst Left Sidebar</a> </li>
                        </ul>
                    </li>
                    {{--END SHOP--}}

                    <!-- БЛОК С Features -->
                    <li class="dropdown-list"> <a href="#0"> #Features </span> <span class="menuarrow"> <i
                                        class="flaticon-next-1"></i> </span> </a>
                        <ul class="dropdown">
                            <li class="subhed position-relative"> <a href="#0"> #Category</span> <span
                                            class="menuarrowtwo"> <i class="flaticon-next-1"></i> </span> </a>
                                <ul class="subdropdown">
                                    <li> <a href="#">Latest Shoes</a> </li>
                                    <li> <a href="#">New Shoes</a> </li>
                                    <li> <a href="#">Casual Shoes</a> </li>
                                    <li> <a href="#">Office Shoes</a> </li>
                                </ul>
                            </li>
                            <li class="subhed position-relative"> <a href="#0"> #Offers</span> <span
                                            class="menuarrowtwo"> <i class="flaticon-next-1"></i> </span> </a>
                                <ul class="subdropdown">
                                    <li> <a href="#">New Arrivals </a> </li>
                                    <li> <a href="#">Shirts</a> </li>
                                    <li> <a href="#">Polos</a> </li>
                                    <li> <a href="#">Jeans</a> </li>
                                    <li> <a href="#">Casual Dress</a> </li>
                                </ul>
                            </li>
                            <li class="subhed position-relative"> <a href="#0"> #accessories</span> <span
                                            class="menuarrowtwo"> <i class="flaticon-next-1"></i> </span> </a>
                                <ul class="subdropdown">
                                    <li> <a href="#">Latest Items </a> </li>
                                    <li> <a href="#">Quick Deal</a> </li>
                                    <li> <a href="#">Shoes Items</a> </li>
                                    <li> <a href="#">Hot Deal</a> </li>
                                    <li> <a href="#">Fast Services </a> </li>
                                </ul>
                            </li>
                            <li class="subhed position-relative"> <a href="#0"> #Discount</span> <span
                                            class="menuarrowtwo"> <i class="flaticon-next-1"></i> </span> </a>
                                <ul class="subdropdown">
                                    <li> <a href="#">10% Off</a> </li>
                                    <li> <a href="#">20% Off</a> </li>
                                    <li> <a href="#">30% Off</a> </li>
                                    <li> <a href="#">40% Off</a> </li>
                                    <li> <a href="#">50% Off</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-list"> <a href="#0"> #Pages</span> <span class="menuarrow" > <i
                                        class="flaticon-next-1"></i> </span> </a>
                        <ul class=" dropdown ">
                            <li><a href="#"> About Us </a></li>
                            <li><a href="#"> Cart </a></li>
                        </ul>
                    </li>

                    <li class="dropdown-list"> <a href="#0"> <span> Blogs </span> <span class="menuarrow"> <i
                                        class="flaticon-next-1"></i> </span> </a>
                        <ul class=" dropdown ">
                            <li><a href="#">Blog Single </a></li>
                            <li><a href="#">Blog Details </a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact </a></li>
                    <li><a href="#">Login </a></li>
                    <li><a href="#">Register </a></li>
                </ul>
            </div>
        </div>

        <div class="main-menu p-0 border-bottom-0" >
            <div class="mega-menu-default mega-menu d-lg-block d-none ">
                <div class="container   position-relative bg-dark">
                    <div class="row g-0 menu-width align-items-center bg-black">
                        <div class="boxone text-start">
                            <nav>
                                <ul class="page-dropdown-menu d-flex align-items-center justify-content-start ">
                                    <a class="dropdown-list ps-0 " href="{{route('main.index')}}"> <span class="text-white">Главная</span> </a>

                                    <li class="dropdown-list "> <a href="{{route('main.index.brand')}}"> <span> Бренды </span> </a>
                                        <ul class="dropdown">
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            </li>
                                            <li class="submenu-parent "> <a href="#0"> <span>Shop Details
                                                            Style
                                                        </span> <span class="menuarrow"> <i class="flaticon-next-1"></i>
                                                        </span> </a>
                                                <ul class="submenu">
                                                    <li><a href="shop-details-1.html">Shop Details Style
                                                            01</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                        <ul class="page-dropdown-menu d-flex align-items-center justify-content-start ">
                                            <a class="dropdown-list ps-0 " href="{{route('main.index.category')}}"> <span class="text-white">Категории</span> </a>
                                        </ul>


                                    {{-- начало features--}}

                                    <li class="dropdown-list megamenu "> <a href="#0"> <span>Features </span> </a>
                                        <div class="dropdown megamenu-dropdown">
                                            <div class="row g-0">
                                                <div class="col-xl-6 col-lg-7 megamenu-padding-one">
                                                    <div class="row g-0">
                                                        <div class="col-lg-4">
                                                            <div class="megamenu-box one">
                                                                <a href="{{route('main.index')}}">Главная </a>
                                                                <ul class="megamenu-list">
                                                                    <li><a href="index.html">Home Page
                                                                            01</a></li>
                                                                    <li><a href="index-2.html">Home Page
                                                                            02</a></li>
                                                                    <li><a href="index-3.html">Home Page
                                                                            03</a></li>
                                                                    <li><a href="index-4.html">Home Page
                                                                            04</a></li>
                                                                    <li><a href="shop-details-1.html">Product
                                                                            Style
                                                                            1 </a> </li>
                                                                    <li><a href="shop-details-2.html">Product
                                                                            Style
                                                                            2 </a> </li>
                                                                    <li><a href="shop-details-3.html">Product
                                                                            Style
                                                                            3 </a> </li>
                                                                    <li><a href="contact.html">Contact </a>
                                                                    </li>
                                                                    <li><a href="faq.html">FAQ</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="megamenu-box one">
                                                                <h6>Shop Pages</h6>
                                                                <ul class="megamenu-list">
                                                                    <li><a href="shop-grid.html">Shop Grid
                                                                        </a></li>
                                                                    <li><a href="shop-list-left-sidebar.html">Shop
                                                                            list</a> </li>
                                                                    <li><a href="shop-grid-right-sidebar.html">Shop
                                                                            2 colums </a></li>
                                                                    <li><a href="shop-grid-left-sidebar.html">Shop
                                                                            3
                                                                            colums </a></li>
                                                                    <li><a href="shop-grid.html">Shop 4
                                                                            colums</a>
                                                                    </li>
                                                                    <li><a href="shop-grid-left-sidebar.html">Shop
                                                                            Grid Left Sidebar </a></li>
                                                                    <li><a href="shop-grid-right-sidebar.html">Shop
                                                                            Grid Right Sidebar</a></li>
                                                                    <li><a href="shop-list-left-sidebar.html">Shop
                                                                            List Left Sidebar</a></li>
                                                                    <li><a href="shop-list-right-sidebar.html">Shop
                                                                            List Right Sidebar</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="megamenu-box four">
                                                                <h6>Others Pages</h6>
                                                                <ul class="megamenu-list">
                                                                    <li><a href="cart.html">Cart </a></li>
                                                                    <li><a href="compare.html">Compare </a>
                                                                    </li>
                                                                    <li><a href="wishlist.html">Wishlist
                                                                        </a></li>
                                                                    <li><a href="order-track.html">Order
                                                                            Track </a>
                                                                    </li>
                                                                    <li><a href="my-account.html">My Account
                                                                        </a>
                                                                    </li>
                                                                    <li><a href="blog.html">Blog</a></li>
                                                                    <li><a href="blog-single.html">Blog
                                                                            Single</a>
                                                                    </li>
                                                                    <li><a href="login.html">Login</a></li>
                                                                    <li><a href="register.html">Register</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-5 megamenu-padding background">
                                                    <div class="row g-0">
                                                        <div class="col-xl-6 col-lg-5">
                                                            <div class="content"> <a href="shop-details-1.html"
                                                                                     class="thumb d-block"> <img
                                                                            src={{asset("plugins/images/home-four/product-1.png")}}
                                                                            alt="">
                                                                </a> <a href="shop-details-1.html"
                                                                        class="title d-block">
                                                                    <h6> Woman Pink Purse Isolated </h6>
                                                                </a> <a href="shop-details-1.html"
                                                                        class="price">$250.00</a> </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-7">
                                                            <div class="offer">
                                                                <h6>Discount</h6>
                                                                <ul>
                                                                    <li><a href="shop-grid.html">
                                                                            <span>%</span> 30%
                                                                            Off Everything! </a></li>
                                                                    <li><a href="shop-grid-left-sidebar.html">
                                                                            <span>%</span> Get an Extra 20%
                                                                            Off
                                                                            Sale! Use Code: Sale </a></li>
                                                                    <li><a href="shop-grid-right-sidebar.html">
                                                                            <span>%</span> Flash Sale Offers
                                                                        </a>
                                                                    </li>
                                                                    <li><a href="shop-grid.html">
                                                                            <span>%</span>
                                                                            Flash Sale Offers </a> </li>
                                                                    <li><a href="shop-grid-left-sidebar.html">
                                                                            <span>%</span> 30% Off
                                                                            Everything! </a>
                                                                    </li>
                                                                    <li><a href="shop-grid-right-sidebar.html">
                                                                            <span>%</span> Flash Sale Offers
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                    {{-- конец features--}}
                            </nav>
                        </div>
                        {{--LOGO--}}
                        <div class="boxtwo text-center">
                            <a href="index.html" class="logo"> <img src={{asset("plugins/images/logo/logo-white.png")}}
                                                                    alt=""></a>
                        </div>
                        {{-- END LOGO--}}

                        {{--ПРАВАЯ ЧАСТЬ КОНЕЦ--}}
                        <div class="boxthree text-end">
                            <div class="right d-flex align-items-center justify-content-end">
                                <ul class="main-menu__widge-box d-flex align-items-center ">
                                    <li class="search-box-holder">
                                        <form action="#0">
                                            <div class="form-group search-box menu"> <span class="search-icon"> <i
                                                            class="flaticon-magnifying-glass"></i> </span>
                                            </div>
                                        </form>
                                    </li>
                                    @guest()
                                        <li class="d-lg-block d-none">
                                            <a href="{{ route('login') }}" class="number"> <i class="flaticon-user-4"></i> </a>
                                        </li>
                                    @endguest
                                    @auth()
                                        @if(auth()->user()->role->title == 'admin')
                                        <li class="d-lg-block d-none">
                                            <a href="{{ route('admin.index') }}" class="number"> <i class="fa-solid fa-a"></i> </a>
                                        </li>
                                        @endif

                                        <li class="d-lg-block d-none">
                                            <a href="{{ route('personal.index', auth()->user()->id) }}" class="number"> <i class="flaticon-user-4"></i> </a>
                                        </li>

                                    @endauth
                                        <li> <a href="{{route('basket.index')}}" class="number cart-icon"> <i class="flaticon-shop-bag"></i>
                                                <span class="count count4"></span>
                                            </a> </li>
                                    </ul>

                            </div>
                        </div>
                        {{--ПРАВАЯ ЧАСТЬ--}}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="search-box-holder d-lg-block d-none">
        <form action="#0">
            <div class="search-box-popup">
                <div class="search-box-popup-content position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="width d-flex align-items-center">
                                    <div class="search-box-close two"> </div>
                                    <div class="form-group search-box common position-relative"> <input type="text"
                                                                                                        class="form-control" placeholder="Search for products"> <span
                                                class="search-icon"> <i class="flaticon-magnifying-glass"></i> </span>
                                    </div>
                                    <div class="search-box-close one"> <span> X </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="side-cart-closer"></div>

</header>

<div class="mt-5 m-lg-5">
    @yield('Content')
</div>


<footer class="footer-default home4-footer bg-light">
    <!--Start Footer-->
    <div class="footer-default__main-footer position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="footer-title">
                            <h4> About Us</h4>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#0"> Who we are</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="footer-title">
                            <h4> Useful links </h4>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#0">Contact us</a></li>
                            <li><a href="#0">Common FAQs</a></li>
                            <li><a href="#0">Terms & Conditions</a></li>
                            <li><a href="#0">Return policy</a></li>
                            <li><a href="#0">Cancellation</a></li>
                            <li><a href="#0">Track orders</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="footer-title">
                            <h4> Follow us on </h4>
                        </div>
                        <ul class="footer-links social">
                            <li><a href="https://www.facebook.com/"><span><i
                                                class="flaticon-facebook-app-symbol"></i> </span>
                                    <span>Facebook</span></a></li>
                            <li><a href="https://twitter.com/"> <span><i class="flaticon-twitter"></i></span>
                                    <span>Twitter</span></a></li>
                            <li><a href="https://www.instagram.com/"> <span> <i
                                                class="flaticon-instagram"></i></span> <span>Instagram</span></a></li>
                            <li><a href="https://www.youtube.com/"> <span><i class="flaticon-youtube"></i> </span>
                                    <span>Youtube</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="footer-title">
                            <h4> Shopping </h4>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#0">Men Shopping Trendy</a></li>
                            <li><a href="#0">Women Shopping 2021</a></li>
                            <li><a href="#0">Gift cards & Coupon</a></li>
                            <li><a href="#0">Home $ living</a></li>
                            <li><a href="#0">Electronics Gadget</a></li>
                            <li><a href="#0">Gift cards & Coupon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- footer-bottom Footer-->
    <div class="footer_bottom position-relative">
        <div class="container">

                <ul class="footer-payment wow fadeInUp animated float-md-end">
                    <li><a href="#0"> <img src="{{asset("plugins/images/home-four/method-1.jpg")}}" alt=""></a></li>
                    <li><a href="#0"> <img src="{{asset("plugins/images/home-four/method-2.jpg")}}" alt=""></a></li>
                    <li><a href="#0"> <img src="{{asset("plugins/images/home-four/method-3.jpg")}}" alt=""></a></li>
                    <li><a href="#0"> <img src="{{asset("plugins/images/home-four/method-4.jpg")}}" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--==== Js Scripts Start ====-->
<script src="https://kit.fontawesome.com/5db38fd61b.js" crossorigin="anonymous"></script>
<!-- Jquery v3.6.0 Js -->
<script src={{asset("plugins/js/jqurey.v3.6.0.min.js")}}></script> <!-- Popper v2.9.3 Js -->
<script src={{asset("plugins/js/popper.v2.9.3.min.js")}}></script> <!-- Bootstrap v5.1.1 js -->
<script src={{asset("plugins/js/bootstrap.v5.1.1.min.js")}}></script> <!-- jquery ui js -->
<script src={{asset("plugins/js/plugin/jquery-ui.min.js")}}></script> <!-- Parallax js -->
<script src={{asset("plugins/js/plugin/jarallax.min.js")}}></script> <!-- Slick Slider Js -->
<script src={{asset("plugins/js/plugin/slick.min.js")}}></script> <!-- isotope Js -->
<script src={{asset("plugins/js/plugin/isotope.js")}}></script> <!-- magnific-popup v2.3.4 Js -->
<script src={{asset("plugins/js/plugin/jquery.magnific-popup.min.js")}}></script> <!-- Tweenmax v2.3.4 Js -->
<script src={{asset("plugins/js/plugin/tweenMax.min.js")}}></script> <!-- Nice Select Js -->
<script src={{asset("plugins/js/plugin/nice-select.v1.0.min.js")}}></script> <!-- Wow js -->
<script src={{asset("plugins/js/plugin/wow.v1.3.0.min.js")}}></script> <!-- Wow js -->
<script src={{asset("plugins/js/plugin/jquery.countdown.min.js")}}></script> <!-- Main js -->
<script src={{asset("plugins/js/main.js")}}></script>
<!--==== Js Scripts End ====-->
</body>

</html>