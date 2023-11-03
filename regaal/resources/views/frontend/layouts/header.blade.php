<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title id="page-title">Regaal - [Page Title]</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/favicon.ico') }}">


        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        {{-- <!-- <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}"> --> --}}
        <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}">
        {{-- <!-- <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}"> --> --}}
        <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">


        <script>
            function setPageTitle() {
                // Get the current URL
                const currentURL = window.location.href;
        
                // Extract the page name from the URL (You may need to customize this part based on your URL structure)
                let pageName = "Home";
        
                if (currentURL.includes("/about")) {
                    pageName = "About Us";
                } else if (currentURL.includes("/leadership")) {
                    pageName = "Leadership";
                } else if (currentURL.includes("/products")) {
                    pageName = "Products";
                } else if (currentURL.includes("/gallery")) {
                    pageName = "Gallery";
                } else if (currentURL.includes("/csr")) {
                    pageName = "CSR";
                } else if (currentURL.includes("/careers")) {
                    pageName = "Careers";
                } else if (currentURL.includes("/contact")) {
                    pageName = "Contact";
                }
        
                // Set the page title dynamically
                document.title = `Regaal - ${pageName}`;
            }
        
            // Call the function to set the initial page title
            setPageTitle();
        </script>
        
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                    <a href="#"><img src="{{ asset('frontend/img/logo/regaal_logo_new.png') }}" style="height: 60px;" alt=""></a>
                                    <!--<a href="#"><img src="assets/front/img/logo/logo.webp" alt=""></a>-->
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                                     
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About</a>
                                            <!-- <ul class="submenu">
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Our Culture</a></li>
                                                <li><a href="#">Our Achievements</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="{{url('/leadership')}}">Leadership</a></li>
                                        <li><a href="javascript:void(0);">Products</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/primary_product')}}">Primary Product</a></li>
                                                <li><a href="{{url('/allied_products')}}">Allied Products</a></li>
                                                <li><a href="{{url('/value_added_products')}}">Value added Products</a></li>
                                                <li><a href="{{url('/modified_starches')}}">Modified Starches</a></li>
                                                <li><a href="{{url('/future_products')}}">Future Product</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">Others</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                                <!-- <li><a href="javascript:void(0);">News</a></li> -->
                                                <li><a href="{{url('/csr')}}">CSR</a></li>
                                                <!-- <li><a href="javascript:void(0);">New Business Initiatives</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/careers')}}">Careers</a></li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul>
                                    </nav>
                                </div>
                            </div>             
                            <!--<div class="col-xl-2 col-lg-3 col-md-3">
                                <div class "header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">Contact Now</a>
                                </div>
                            </div>-->
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
