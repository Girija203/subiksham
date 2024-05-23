<!DOCTYPE html>
<html lang="zxx">


<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('user/assets/css/meanmenu.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/fontawesome.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/flaticon.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/magnific-popup.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/animate.css')}}" />

    <link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}" />

    <link rel="stylesheet" href="{{asset('user/assets/css/dark.css')}}" />

    <link rel="stylesheet" href="{{asset('user/assets/css/responsive.css')}}" />
    <title>Education & Online Learning</title>
    <link rel="icon" type="image/png" href="{{asset('user/assets/images/favicon.png')}}">
    <!-- Add Slick Slider CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Add your own CSS styles if needed -->
</head>

<body>

    <div class="navbar-area">
        <div class="mobile-nav">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('user/assets/images/logo/logo 06.png')}}" class="main-logo" alt="logo" />
                <img src="{{asset('user/assets/images/logo/logo 07.png')}}" class="white-logo" alt="logo" />
            </a>
        </div>
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('user/assets/images/logo/logo 06.png')}}" class="main-logo" alt="logo" />
                        <img src="{{asset('user/assets/images/logo/logo 07.png')}}" class="white-logo" alt="logo" />
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                        <ul class="navbar-nav text-right">
                            <li class="nav-item">
                                <a href="{{ route('home') }}"
                                    class="nav-link {{ request()->route()->getName() == 'home' ? 'active' : '' }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}"
                                    class="nav-link {{ request()->route()->getName() == 'about' ? 'active' : '' }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('courses') }}"
                                    class="nav-link {{ request()->route()->getName() == 'courses' ? 'active' : '' }}">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('gallery') }}"
                                    class="nav-link {{ request()->route()->getName() == 'gallery' ? 'active' : '' }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('our.franchise') }}"
                                    class="nav-link {{ request()->route()->getName() == 'our.franchise' ? 'active' : '' }}">Become
                                    Our Franchisee</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('nearme') }}"
                                    class="nav-link {{ request()->route()->getName() == 'nearme' ? 'active' : '' }}">SA
                                    abacus Near Me</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}"
                                    class="nav-link {{ request()->route()->getName() == 'contact' ? 'active' : '' }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    @yield('content')


    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-left">
                        <a href="{{route('home')}}" class="logo"><img
                                src="{{asset('user/assets/images/logo/logo 07.png')}}" alt="logo" /></a>
                        <p>
                            Subiksham Academy is widely recognized as the premier choice for abacus training in
                            Pondicherry and Tamil Nadu.


                        </p>
                        <ul class="footer-social">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61559784037003" target="blank">
                                    <i class="flaticon-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/subikshamabacusacademy/" target="blank"><i class="fab fa-instagram" ></i></a>
                            </li>
                            <li>
                                <a href="mailto:sanlak.v@gmail.com" target="blank"><i class="flaticon-envelope"></i></a>

                            </li>

                            <li>
                                <a href="https://wa.me/9092576160?text=Hello%2C%20World!" target="_blank"><i
                                        class="fab fa-whatsapp"></i></a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content fml-25">
                        <h2>Academy</h2>
                        <ul>

                            <li>
                                <a href="{{route('about')}}"><i class="flaticon-next"></i> About</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}"><i class="flaticon-next"></i> Contact</a>
                            </li>

                            {{-- <li>
                                <a href="{{route('privacy')}}"><i class="flaticon-next"></i> Privacy Policy</a>
                            </li> --}}


                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-content fml-15">
                        <h2>Links</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"><i class="flaticon-next"></i> Home</a>
                            </li>
                            <li>
                                <a href="{{route('courses')}}"><i class="flaticon-next"></i> Courses</a>
                            </li>

                            {{-- <li>
                                <a href="#"><i class="flaticon-next"></i> Why Us?</a>
                            </li> --}}
                            <li>
                                <a href="{{route('faq')}}"><i class="flaticon-next"></i> FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content fml-15 fml-20">
                        <h2>Find Us</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="flaticon-next"></i> +91 9994037724</a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-next"></i> +91 9092576160</a>
                            </li>
                            <li>
                                <a href="mailto:sanlak.v@gmail.com" target="blank"><i class="flaticon-next"></i>sanlak.v@gmail.com</a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-next"></i>No.9, Rajarajeswari street</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-next"></i>Mudaliarpet,Puducherry-605004.
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="copy-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>©2024
                        Subiksham
                        Academy India Pvt. Ltd. | All rights reserved.</h3>
                </div>
                <div class="col-sm-6" style="text-align: right">
                    {{-- <a href="{{route('terms')}}" class="copy_rights_terms">Terms</a> | <a
                        href="{{route('privacy')}}" class="copy_rights_terms">Privacy Policy</a> --}}
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="scroll-top wow animate__animated animate__bounceInDown">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>

    <script src="{{asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('user/assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('user/assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('user/assets/js/wow.min.js')}}"></script>

    <script src="{{asset('user/assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('user/assets/js/form-validator.min.js')}}"></script>

    <script src="{{asset('user/assets/js/contact-form-script.js')}}"></script>

    <script src="{{asset('user/assets/js/main.js')}}"></script>


    <!-- Add Slick Slider JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Initialize Slick Slider -->
    <script>
        $(document).ready(function () {
            $('.teachers-slider').slick({
                slidesToShow: 3, // Number of slides to show
                slidesToScroll: 1, // Number of slides to scroll
                autoplay: true, // Autoplay the slider
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                dots: true, // Show dots navigation
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>


</html>