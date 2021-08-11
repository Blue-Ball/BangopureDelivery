<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script src="{{asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/vue.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/gif" sizes="16x16">
    <!--    glide slider-->
    <script src="{{asset('assets/js/glide.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/glide.core.min.css')}}">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bangopure</title>
</head>

<body>
    <main>
        <section class="head-ban-sec">
            <!-- header starts-->
            <header>
                <div class="container">
                    <nav class="navbar navbar-expand-sm main-nav">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('assets/img/logo-white.png')}}" alt="logo" class="logo">
                        </a>
                        <div class="mbl-menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNav"
                                aria-controls="#MainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse stroke" id="MainNav">
                            <ul class="navbar-nav left-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#advantage">Advantages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto right-nav">
                                <li>
                                </li>
                                <li class="nav-item">
                                    <a href="#download_app"><button class="download-btn btn ">Download</button></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--            header ends-->
        </section>
        @yield('content')
        <!-- footer starts-->
        <footer class="foot-sec">
            <div class="container">
                <hr>
                <div class="row foot-row sec-pad">
                    <div class="col-md-4 col-lg-3">
                        <a href="#"><img class="foot-logo" src="{{asset('assets/img/logo.png')}}"></a>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <h4 class="foot-title">Partnership</h4>
                        <ul class="footlinks">
                            <li><a href="#">Assistant</a></li>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Restaurant</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <h4 class="foot-title">Bangopure</h4>
                        <ul class="footlinks">
                            <li><a href="#">Privacy agreement</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Requisites</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <h4 class="foot-title">About</h4>
                        <ul class="footlinks">
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Offices</a></li>
                            <li><a href="#">Branding</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-coptfoot">
                <div class="container">
                    <div class="row copywrite">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6 text-right">
                            Copyright © 2021 - Bangopure- All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer ends-->
    </main>

    <script>
    new Glide('.testimonials', {
        type: 'carousel',
        perView: 3,
        autoplay: 5000,
        breakpoints: {
            767: {
                perView: 1
            },
            1140: {
                perView: 2
            }
        }
    }).mount()
    new Glide('.service_slider', {
        type: 'carousel',
        perView: 4,
        autoplay: 5000,
        breakpoints: {
            767: {
                perView: 1
            },
            1140: {
                perView: 2
            }
        }
    }).mount()
    </script>

</body>
<div class="XTranslate"></div>

</html>