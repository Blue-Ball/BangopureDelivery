@extends('layout')

@section('content')

    <!--  services section starts-->
    <section class="service-sec sec-mar">
        <!--       slider starts-->
        <div class="home-slider">
            <div class="container">
                <div id="homepageslider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#homepageslider" data-slide-to="0" class=""></li>
                        <li data-target="#homepageslider" data-slide-to="1" class="active"></li>
                        <li data-target="#homepageslider" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="row slide-layout">
                                <div class="col-md-6 col-12 slide-caption">
                                    <h2>Multi-store e-commerce solution for on demand ordering and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat maiores
                                        atque, qui ipsam dicta ex eum, rerum. Harum perspiciatis ratione voluptate
                                        laborum minus animi sint, suscipit ipsam veniam atque, magnam.</p>
                                    <div class="slide-btn">
                                        <a href="#"><img src="{{asset('assets/img/apple-store.png')}}"></a>
                                        <a href="#"><img src="{{asset('assets/img/google-play.png')}}"></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="slide-img">
                                        <img src="{{asset('assets/img/ban1.png')}}" alt="slide1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="row slide-layout">
                                <div class="col-md-6 col-12 slide-caption">
                                    <h2>Multi-store e-commerce solution for on demand ordering and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat maiores
                                        atque, qui ipsam dicta ex eum, rerum. Harum perspiciatis ratione voluptate
                                        laborum minus animi sint, suscipit ipsam veniam atque, magnam.</p>
                                    <div class="slide-btn">
                                        <a href="#"><img src="{{asset('assets/img/apple-store.png')}}"></a>
                                        <a href="#"><img src="{{asset('assets/img/google-play.png')}}"></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="slide-img">
                                        <img src="{{asset('assets/img/ban1.png')}}" alt="slide2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row slide-layout">
                                <div class="col-md-6 col-12 slide-caption">
                                    <h2>Multi-store e-commerce solution for on demand ordering and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat maiores
                                        atque, qui ipsam dicta ex eum, rerum. Harum perspiciatis ratione voluptate
                                        laborum minus animi sint, suscipit ipsam veniam atque, magnam.</p>
                                    <div class="slide-btn">
                                        <a href="#"><img src="{{asset('assets/img/apple-store.png')}}"></a>
                                        <a href="#"><img src="{{asset('assets/img/google-play.png')}}"></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="slide-img">
                                        <img src="{{asset('assets/img/ban1.png')}}" alt="slide3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#homepageslider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#homepageslider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--       slider ends-->
        <div class="container" id="service">
            <div class="text-center">
                <h3 class="sec-title">
                    <span>Services</span>
                </h3>
            </div>
            <div class="glide service_slider glide--ltr glide--carousel glide--swipeable">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides"
                        style="transition: transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 4220px; transform: translate3d(-2820px, 0px, 0px);">
                        <li class="glide__slide" style="width: 460px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/service4.png')}}">
                                    <h3>Parcel Delivery</h3>
                                    <p>Send your parcels to any part of the city and the world with a few touches.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="glide__slide"
                            style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/service5.png')}}">
                                    <h3>Taxi Delivery</h3>
                                    <p>For private taxi firms or companies.</p>
                                </div>
                            </a>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/service1.png')}}">
                                    <h3>Grocery Delivery</h3>
                                    <p>To order food online from the supermarket.</p>
                                </div>
                            </a>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/service2.png')}}">
                                    <h3>Food Delivery</h3>
                                    <p>To order meals online from restaurants.</p>
                                </div>
                            </a>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/service3.png')}}">
                                    <h3>Pharmacy Delivery</h3>
                                    <p>To order medicine online from a pharmacy.</p>
                                </div>
                            </a>
                        </li>    
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/delivery-service.jpg')}}">
                                    <h3>Delivery Service</h3>
                                    <p>Send your parcels to any part of the city and the world with a few touches.</p>
                                </div>
                            </a>
                        </li> 
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/rent-space.jpg')}}">
                                    <h3>Rent Spare Space</h3>
                                    <p>Rent your spare garage, room and car Park.</p>
                                </div>
                            </a>
                        </li> 
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <a href="#" class="service-link">
                                <div class="service-box">
                                    <img src="{{asset('assets/img/Car-wish.png')}}">
                                    <h3>Car Wish</h3>
                                    <p>Car, Truck, Bikes etc</p>
                                </div>
                            </a>
                        </li>                         
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- services section ends-->
    <!--        counter section starts-->
    <section class="feature-sec sec-pad" id="advantage">
        <div class="container">
            <div class="text-center">
                <h3 class="sec-title">
                    <span>We grow more every day</span>
                </h3>
            </div>
            <div>
                <ul class="counters">
                    <li class="counter-item">
                        <div class="counter-icon">
                            <img src="{{asset('assets/img/feat1.png')}}">
                        </div>
                        <h4>+100</h4>
                        <p>Active Assistant</p>
                    </li>
                    <li class="counter-item">
                        <div class="counter-icon">
                            <img src="{{asset('assets/img/feat2.png')}}">
                        </div>
                        <h4>+100</h4>
                        <p>Active User</p>
                    </li>
                    <li class="counter-item">
                        <div class="counter-icon">
                            <img src="{{asset('assets/img/feat3.png')}}">
                        </div>
                        <h4>+15</h4>
                        <p>In-office Employees</p>
                    </li>
                    <li class="counter-item">
                        <div class="counter-icon">
                            <img src="{{asset('assets/img/feat4.png')}}">
                        </div>
                        <h4>+55000</h4>
                        <p> Variety of products</p>
                    </li>
                    <li class="counter-item">
                        <div class="counter-icon">
                            <img src="{{asset('assets/img/feat5.png')}}">
                        </div>
                        <h4>600-800</h4>
                        <p>Daily Orders</p>
                    </li>
                    <li class="counter-item">
                        <div class="counter-icon">
                            <img src="{{asset('assets/img/feat6.png')}}">
                        </div>
                        <h4>+150</h4>
                        <p>Merchants</p>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <!--        counter section ends-->
    <!--        call to action section starts-->
    <section class="cta-sec" id="download_app">
        <div class="container">
            <div class="cta-box">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="cta-content">
                            <h3>Download BangoPure</h3>
                            <p>Bangopure is a marketplace for all eco friendly products and services. Download our
                                app now.</p>
                            <div data-brackets-id="1641" class="slide-btn">
                                <a data-brackets-id="1642" href="#"><img data-brackets-id="1643"
                                        src="{{asset('assets/img/apple-store.png')}}"></a>
                                <a data-brackets-id="1644" href="#"><img data-brackets-id="1645"
                                        src="{{asset('assets/img/google-play.png')}}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="cta-img-box">
                            <img src="{{asset('assets/img/iphone1.png')}}" class="cta-img1">
                            <img src="{{asset('assets/img/iphone2.png')}}" class="cta-img2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--        call to action section ends-->
    <!--        testimonial section starts-->
    <section class="testimonial-sec sec-mar">
        <div class="container">
            <div class="text-center">
                <h3 class="sec-title">
                    <span>What our clients say</span>
                </h3>
            </div>
            <div class="glide testimonials glide--ltr glide--carousel glide--swipeable">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides"
                        style="transition: transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 4220px; transform: translate3d(-2820px, 0px, 0px);">
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>We rely heavily on them, almost as if they are in-house at our company. Because
                                    our delivery needs are time sensitive and the products are extremely valuable.
                                </p>
                            </div>
                            <h4 class="testi-author">Ana</h4>
                        </li>
                        <li class="glide__slide"
                            style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>Contracting with Bangopure Delivery has allowed me to focus on the daily
                                    operations of my job. I know the job is in great hands with Bangopure and the
                                    deliveries will get done.</p>
                            </div>
                            <h4 class="testi-author">Justin</h4>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>Contracting with Bangopure Delivery has allowed me to focus on the daily
                                    operations of my job. I know the job is in great hands with Bangopure and the
                                    deliveries will get done.</p>
                            </div>
                            <h4 class="testi-author">Michael Klein</h4>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>I do not have to worry about the details of managing a full trucking fleet
                                    because Bangopure has reliably managed that segment of our business. They move
                                    mail and parcels for us 6 days a week.</p>
                            </div>
                            <h4 class="testi-author">Shoiab Ali</h4>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>Often we have the need for a delivery twice a day and even have some life-saving
                                    runs. Bangopure Delivery has been an excellent resource for us. </p>
                            </div>
                            <h4 class="testi-author">Marcus</h4>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>We rely heavily on them, almost as if they are in-house at our company. Because
                                    our delivery needs are time sensitive and the products are extremely valuable.
                                </p>
                            </div>
                            <h4 class="testi-author">Ana</h4>
                        </li>
                        <li class="glide__slide"
                            style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>Contracting with Bangopure Delivery has allowed me to focus on the daily
                                    operations of my job. I know the job is in great hands with Bangopure and the
                                    deliveries will get done.</p>
                            </div>
                            <h4 class="testi-author">Justin</h4>
                        </li>
                        <li class="glide__slide"
                            style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>Contracting with Bangopure Delivery has allowed me to focus on the daily
                                    operations of my job. I know the job is in great hands with Bangopure and the
                                    deliveries will get done.</p>
                            </div>
                            <h4 class="testi-author">Michael Klein</h4>
                        </li>
                        <li class="glide__slide" style="width: 460px; margin-left: 5px; margin-right: 5px;">
                            <div class="testi-box">
                                <div class="testi-quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                <p>I do not have to worry about the details of managing a full trucking fleet
                                    because Bangopure has reliably managed that segment of our business. They move
                                    mail and parcels for us 6 days a week.</p>
                            </div>
                            <h4 class="testi-author">Shoiab Ali</h4>
                        </li>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!--        testimonial section ends-->

@endsection