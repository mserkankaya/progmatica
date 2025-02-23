<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        Progmatica
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/bootstrap.css')}}" />

    <!-- Custom styles for this template -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('user/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.html">Anasayfa <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">
                                    Hakkımızda
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.html">
                                    Hizmetlerimiz
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="portfolio.html">
                                    Çalışmalarımız
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Bize Ulaşın</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>


@yield('content')

<section class="info_section  layout_padding2-top">
    <div class="social_container">
        <div class="social_box">
            <a href="">
                <img src="{{asset('user/images/fb.png')}}" alt="">
            </a>
            <a href="">
                <img src="{{asset('user/images/twitter.png')}}" alt="">
            </a>
            <a href="">
                <img src="{{asset('user/images/linkedin.png')}}" alt="">
            </a>
            <a href="">
                <img src="{{asset('user/images/youtube.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="info_container ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <h6>
                        ABOUT US
                    </h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6>
                        Instagram
                    </h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipi
                        scing elit, sed doLorem ipsum dolor sit
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6>
                        NEED HELP
                    </h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6>
                        CONTACT US
                    </h6>
                    <div class="info_link-box">
                        <a href="">
                            <img src="{{asset('user/images/location.png')}}" alt="">
                            <span> Gb road 123 london Uk </span>
                        </a>
                        <a href="">
                            <img src="{{asset('user/images/call.png')}}" alt="">
                            <span>+01 12345678901</span>
                        </a>
                        <a href="">
                            <img src="{{asset('user/images/mail.png')}}" alt="">
                            <span> demo@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section -->
    <section class=" footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>
    <!-- footer section -->

</section>

<!-- end info section -->


<script type="text/javascript" src="{{asset('user/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script type="text/javascript" src="{{asset('user/js/custom.js')}}"></script>

</body>

</html>
