<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="{{asset('fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fonts/elegant-fonts.css')}}" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    <title>Propper - Architecture & Real Estate Onepage Landing page HTML Template</title>

</head>

<body class="has-loading-screen links-hover-effect" data-spy="scroll" data-target=".navigation">

<div class="page-wrapper" id="page-top">
    <header id="page-header">
        <nav class="navigation background-is-dark">
            <div class="container">
                <div class="wrapper">
                    <div class="left">
                        <a href="index-v1.html" class="brand"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    </div>
                    <!--end left-->
                    <div class="right">
                        <ul class="nav navigation-links animate">
                            <li><a href="#page-top" class="scroll">Home</a></li>
                            <li><a href="#about" class="scroll">About</a></li>
                            <li><a href="#gallery" class="scroll">Gallery</a></li>
                            <li><a href="#pricing" class="scroll">Pricing</a></li>
                            <li><a href="#contact" class="scroll">Contact</a></li>
                        </ul>
                        <div class="nav-btn">
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                        </div>
                    </div>
                    <!--end right-->
                </div>
            </div>
            <!--end container-->
        </nav>
        <!--end navigation-->
        <div class="hero-section background-is-dark">
            <div class="wrapper">
                <div class="hero-title">
                    <div class="container">
                        <h1 class="animate">Get Ready.<br>We're finishing!</h1>
                        <form class="animate" id="form-hero">
                            <label for="form-hero-email">Enter your email for the latest news</label>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="form-hero-email" name="email" placeholder="Your email" required="">
                                        <span class="input-group-btn">
                                            <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </form>
                        <!--end form-hero-->
                    </div>
                    <!--end container-->
                </div>
                <!--end hero-title-->
            </div>
            <!--end wrapper-->
            <div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('images/cam_04_day.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('images/cam11_night_blue.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('images/cam_08_day.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('images/cam_02_day.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('images/cam_10_day.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('images/cam12_day.jpg')}}" alt=""></div>
                </div>
            </div>
            <!--end owl-carousel-->
        </div>
        <!--end hero-section-->
    </header>
    <!--end page-header-->

    <div id="page-content">

        <div class="block background-is-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter left and move 20px">
                            <i class="icon"><img src="{{asset('img/icon-white-shield.png')}}" alt=""></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Modern & Safe Living</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac ornare felis.
                                    Nam velit neque, blandit id placerat
                                </p>
                                <a href="" class="btn btn-default btn-rounded arrow">Read More</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter bottom and move 20px">
                            <i class="icon"><img src="{{asset('img/icon-white-pin.png')}}" alt=""></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Peaceful Location</h3>
                                <p>Mauris ac ornare felis. Nam velit neque, blandit id placerat eu, venenatis at purus.
                                    Nunc maximus ultrices lacus
                                </p>
                                <a href="" class="btn btn-default btn-rounded arrow">Read More</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter right and move 20px">
                            <i class="icon"><img src="{{asset('img/icon-white-wallet.png')}}" alt=""></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Great Starting Prices</h3>
                                <p>Nam velit neque, blandit id placerat eu, venenatis at purus. Nunc maximus ultrices
                                    lacus eu fringilla.
                                </p>
                                <a href="" class="btn btn-default btn-rounded arrow">Read More</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="bg-transfer opacity-15">
                    <img src="{{asset('img/bg-01.jpg')}}" alt="">
                </div>
                <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->

        <div class="block" id="about">
            <div class="container">
                <h2>About the project.</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>Place where you find yourself</h3>
                        <p>Nam in sodales massa. Donec at ullamcorper diam. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas. Vivamus et ornare leo,
                            a commodo tellus. Suspendisse potenti. Ut posuere viverra lectus non scelerisque.
                        </p>
                        <ul class="check-marks">
                            <li>Quite and peaceful location near the nature</li>
                            <li>Shopping and fitness center right inside the complex</li>
                            <li>Lot of parking places, even for your visitors</li>
                            <li>Many play areas for your kids</li>
                        </ul>
                        <!--end ul-->
                    </div>
                    <!--end col-md-6-->
                    <!--end col-md-6-->
                    <div class="col-md-6 col-sm-6">
                        <h3>Video presentation</h3>
                        <a href="http://vimeo.com/24506451" class="video-player video-popup" data-scroll-reveal="enter bottom and move 50px">
                            <i class="play-icon arrow_triangle-right"></i>
                            <div class="has-overlay">
                                <img src="{{asset('img/image-video.jpg')}}" alt="">
                            </div>
                        </a>
                        <figure class="note">Let’s check the benefits of this project from the architect</figure>
                        <!--end video-player-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="stage completed" data-scroll-reveal="enter left and move 20px">
                            <div class="icon">
                                <i class="icon_check"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>1. Stage</h3>
                                <h2>Planning</h2>
                                <figure>Completed</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage completed" data-scroll-reveal="enter left and move 20px after 0.2s">
                            <div class="icon">
                                <i class="icon_check"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>2. Stage</h3>
                                <h2>Building</h2>
                                <figure>Completed</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage in-progress" data-scroll-reveal="enter left and move 20px after 0.4s">
                            <div class="icon">
                                <i class="icon_hourglass"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>3. Stage</h3>
                                <h2>Finishing works</h2>
                                <figure>In progress</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage not-completed" data-scroll-reveal="enter left and move 20px after 0.6s">
                            <div class="icon">
                                <i class="icon_close"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>4. Stage</h3>
                                <h2>Project done</h2>
                                <figure>Not completed</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="detail left-align">
                    <div class="title">
                        <h3 class="framed">Architecture & Design</h3>
                    </div>
                    <!--end title-->
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter left and move 20px after">
                                <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img src="{{asset('images/sanh_can_ho1.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_can_ho2.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_can_ho3.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_can_ho4.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_can_ho5.jpg')}}" alt="">
                                </div>
                            </div>
                            <!--end gallery-->
                        </div>
                        <!--end col-md-7-->
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter right and move 20px">
                                <h4>High quality materials</h4>
                                <p>Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur
                                    eu risus convallis, auctor augue id, pharetra neque. Morbi pretium neque ac varius
                                    imperdiet. Aliquam sed sapien eget massa hendrerit aliquet. Integer auctor vel
                                    ligula eget faucibus
                                </p>
                                <h4>Soundproof rooms</h4>
                                <p>Donec tincidunt fermentum purus, eu pharetra arcu scelerisque a. Maecenas felis eros,
                                    volutpat ac justo non, imperdiet porttitor lorem. Nulla suscipit mi a arcu sollicitudin,
                                    sit amet
                                </p>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-5-->
                    </div>
                    <!--end row-->
                </div>
                <!--end detail-->
                <div class="detail right-align">
                    <div class="title">
                        <h3 class="framed">Warm & Cozy Interior</h3>
                    </div>
                    <!--end title-->
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter left and move 20px after">
                                <h4>Feel your new home</h4>
                                <p>Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur
                                    eu risus convallis, auctor augue id, pharetra neque. Morbi pretium neque ac varius
                                    imperdiet. Aliquam sed sapien eget massa hendrerit aliquet. Integer auctor vel
                                    ligula eget faucibus. Donec tincidunt fermentum purus, eu pharetra arcu scelerisque a.
                                    Maecenas felis eros, volutpat ac justo non, imperdiet porttitor
                                </p>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-5-->
                        <div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter right and move 20px">
                                <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img src="{{asset('images/sanh_van_phong1.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_van_phong2.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_van_phong3.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_van_phong4.jpg')}}" alt="">
                                    <img src="{{asset('images/sanh_van_phong5.jpg')}}" alt="">
                                </div>
                            </div>
                            <!--end gallery-->
                        </div>
                        <!--end col-md-7-->
                    </div>
                    <!--end row-->
                </div>
                <!--end detail-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block" id="gallery">
            <div class="container">
                <h2>Gallery.</h2>
            </div>
            <div class="owl-carousel big-gallery" data-owl-items="3" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-center="1" data-owl-loop="1" data-owl-nav-container="#big-gallery-nav">
                <div class="slide">
                    <div class="container">
                        <img src="{{asset('images/cam12_day.jpg')}}" alt="">
                        <div class="description">
                            <h3 class="framed">Front View</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img src="{{asset('images/sanh_can_ho3.jpg')}}" alt="">
                        <div class="description">
                            <h3 class="framed">Garage</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img src="{{asset('images/san_vuon_camera013.jpg')}}" alt="">
                        <div class="description">
                            <h3 class="framed">Back View</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
            </div>
            <!--end big-gallery-->
            <div class="container">
                <div class="owl-nav-wrapper">
                    <div class="owl-nav" id="big-gallery-nav"></div>
                </div>
                <!--end owl-nav-wrapper-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block" id="pricing">
            <div class="container">
                <h2>Pricing.</h2>
                <div class="row">
                    <div class="pricing-boxes">
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box description">
                                <h3>Choose your apartment</h3>
                                <div class="price old">Old price</div>
                                <div class="price">New price</div>
                                <div class="values">
                                    <figure>Apartment area</figure>
                                    <figure>Balcony area</figure>
                                    <figure>Parking place</figure>
                                    <figure>Free apartments</figure>
                                </div>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box framed" data-scroll-reveal="enter bottom and move 20px">
                                <h3>2 Room Apartment</h3>
                                <div class="price old">$99,000</div>
                                <div class="price">$79,000</div>
                                <div class="values">
                                    <figure>83m<sup>2</sup></figure>
                                    <figure>26m<sup>2</sup></figure>
                                    <figure class="not-available"><i class="icon_close"></i></figure>
                                    <figure>12</figure>
                                </div>
                                <a href="#" class="btn btn-rounded btn-framed btn-light-frame btn-primary" data-toggle="modal" data-target="#floor-modal">Apartment Details</a>
                                <div class="price-box-footer">
                                    <a href="" class="btn btn-rounded btn-primary">Contact us</a>
                                </div>
                            </div>
                            <!--end price-box-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box framed promoted" data-scroll-reveal="enter bottom and move 20px after 0.2s">
                                <div class="promotion-title"><span>Best value for money</span></div>
                                <h3>3 Room Apartment</h3>
                                <div class="price old">$99,000</div>
                                <div class="price">$79,000</div>
                                <div class="values">
                                    <figure>135m<sup>2</sup></figure>
                                    <figure>45m<sup>2</sup></figure>
                                    <figure class="available"><i class="icon_check"></i></figure>
                                    <figure>7</figure>
                                </div>
                                <a href="#" class="btn btn-rounded btn-framed btn-light-frame btn-primary" data-toggle="modal" data-target="#floor-modal">Apartment Details</a>
                                <div class="price-box-footer">
                                    <a href="" class="btn btn-rounded btn-primary">Contact us</a>
                                </div>
                            </div>
                            <!--end price-box-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box framed" data-scroll-reveal="enter bottom and move 20px after 0.4s">
                                <h3>4 Room Apartment</h3>
                                <div class="price old">$129,000</div>
                                <div class="price">$109,000</div>
                                <div class="values">
                                    <figure>198m<sup>2</sup></figure>
                                    <figure>67m<sup>2</sup></figure>
                                    <figure class="available"><i class="icon_check"></i></figure>
                                    <figure>9</figure>
                                </div>
                                <a href="#" class="btn btn-rounded btn-framed btn-light-frame btn-primary" data-toggle="modal" data-target="#floor-modal">Apartment Details</a>
                                <div class="price-box-footer">
                                    <a href="" class="btn btn-rounded btn-primary">Contact us</a>
                                </div>
                            </div>
                            <!--end price-box-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <h2>FAQ.</h2>
                <div class="row">
                    <div class="col-md-8 col-sm-8 equal-height">
                        <div class="panel-group background-solid" id="faq" role="tablist" aria-multiselectable="true" data-scroll-reveal="enter left and move 20px after">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer1" aria-expanded="true" aria-controls="answer1">Quite and peaceful location near the nature</a>
                                    </h4>
                                </div>
                                <div id="answer1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq1">
                                    <div class="panel-body">
                                        <p>Nunc vel erat eget dolor lobortis venenatis eget in nulla. Aliquam sodales
                                            elit in augue finibus, at sagittis enim vestibulum.
                                            Vivamus varius, velit sollicitudin interdum cursus, augue purus dignissim
                                            quam, dictum commodo lorem ante quis neque. Etiam massa erat, tristique
                                            id semper ac, placerat ac magna.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer2" aria-expanded="true" aria-controls="answer2">Shopping and fitness center right inside the complex</a>
                                    </h4>
                                </div>
                                <div id="answer2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus
                                            elit nibh, id scelerisque tortor ornare at. Maecenas finibus purus id massa
                                            viverra, a commodo enim imperdiet. Donec ac magna non nisi hendrerit facilisis.
                                            In a nisl mi. Fusce vulputate sodales laoreet. Phasellus et urna risus.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq3">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer3" aria-expanded="true" aria-controls="answer3">Lot of parking places, even for your visitors</a>
                                    </h4>
                                </div>
                                <div id="answer3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                    <div class="panel-body">
                                        <p>Donec ut pellentesque nunc. Maecenas malesuada et eros sed tristique. Cras
                                            condimentum in ligula ac efficitur. Vestibulum tempor leo nec molestie bibendum.
                                            Maecenas molestie ligula id efficitur venenatis. Maecenas venenatis mauris
                                            in erat imperdiet, et suscipit ipsum pretium.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                        </div>
                        <!--/ .panel-group-->
                    </div>
                    <div class="col-md-4 col-sm-4 equal-height">
                        <div class="framed vertical-aligned-wrapper" data-scroll-reveal="enter right and move 20px">
                            <form class="inputs-underline vertical-aligned-element middle">
                                <label>Subscribe to our newsletter to get the latest information</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" placeholder="Your email">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <p class="note">*Only relevant information, no spam</p>
                            </form>
                            <!--end form-->
                        </div>
                        <!--end framed-->
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="container">
            <div class="block background-is-dark">
                <div class="testimonials">
                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                            <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1">
                                <blockquote>
                                    <p>Sed vel lorem et velit dictum rhoncus eget sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et.</p>
                                    <footer>John Doe
                                        <figure>River Side Apartments</figure>
                                    </footer>
                                </blockquote>
                                <!--end blockquote-->
                                <blockquote>
                                    <p>Ut ornare in dolor sit amet mollis. Aliquam molestie venenatis mi in efficitur. Lorem ipsum dolor sit amet</p>
                                    <footer>Peter Brown
                                        <figure>LTJ Investments</figure>
                                    </footer>
                                </blockquote>
                                <!--end blockquote-->
                                <blockquote>
                                    <p>Quisque eleifend tempor odio, sit amet maximus tortor hendrerit sollicitudin. Quisque mollis non justo id bibendum</p>
                                    <footer>Suzane J. Bright
                                        <figure>Archits Company</figure>
                                    </footer>
                                </blockquote>
                                <!--end blockquote-->
                            </div>
                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </div>
                <!--end testimonials-->
                <div class="background-wrapper">
                    <div class="bg-transfer opacity-15">
                        <img src="{{asset('img/gallery-big-01.jpg')}}" alt="">
                    </div>
                    <div class="background-color background-color-black"></div>
                </div>
                <!--end background-wrapper-->
            </div>
            <!--end block-->
        </div>
        <!--end container-->

        <div class="block" id="contact">
            <div class="container">
                <h2>Contact.</h2>
                <div class="contact map">
                    <div class="row">
                        <div class="col-md-6 col-sm-6"  data-scroll-reveal="enter bottom and move 20px">
                            <h3>Map</h3>
                            <div class="map" id="map"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <h3>Address</h3>
                                    <address>
                                        Your Company<br>
                                        4877 Spruce Drive<br>
                                        West Newton, PA 15089<br>
                                        <br>
                                        +1 (734) 123-4567<br>
                                        <a href="#">hello@example.com</a>
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h3>Social</h3>
                                    <div class="social">
                                        <a href="#" class="roll-effect"><i class="social_facebook_circle"></i>Facebook</a>
                                        <a href="#"><i class="social_twitter_circle"></i>Twitter</a>
                                        <a href="#"><i class="social_instagram_circle"></i>Instagram</a>
                                        <a href="#"><i class="social_skype_circle"></i>Skype</a>
                                    </div>
                                    <!--end social-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" data-scroll-reveal="enter top and move 20px">
                            <h3>Contact form</h3>
                            <form id="form-contact" method="post" class="clearfix inputs-underline">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                </div>
                                <!--end row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="Your Message" required></textarea>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-12 -->
                                </div>
                                <!--end row -->
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn pull-right btn-primary btn-rounded" id="form-contact-submit">Send a Message</button>
                                </div>
                                <!--end form-group -->
                                <div id="form-contact-status"></div>
                            </form>
                            <!--end form-contact -->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end contact map-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="container">
            <hr>
        </div>
        <!--end container-->

        <div class="block">
            <div class="container">
                <div class="logos">
                    <div class="owl-carousel" data-owl-nav="1" data-owl-dots="0" data-owl-items="5">
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-1.png')}}" alt=""></a>
                        </div>
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-2.png')}}" alt=""></a>
                        </div>
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-3.png')}}" alt=""></a>
                        </div>
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-4.png')}}" alt=""></a>
                        </div>
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-5.png')}}" alt=""></a>
                        </div>
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-6.png')}}" alt=""></a>
                        </div>
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-7.png')}}" alt=""></a>
                        </div>
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo-8.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--end logos-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->


    </div>
    <!--end page-content-->

    <footer id="page-footer" class="block background-is-dark">
        <div class="container">
            <a href="#" class="brand"><img src="{{asset('img/logo.png')}}" alt=""></a>
            <!--end brand-->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <p>
                        Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur eu risus convallis,
                        auctor augue id, pharetra neque.
                    </p>
                </div>
                <!--end col-md-4-->
                <div class="col-md-8 col-sm-8">
                    <div class="contact-data text-align-right">
                        <figure>+1 (734) 123-4567</figure>
                        <a href="#">hello@archits.com</a>
                    </div>
                </div>
                <!--end col-md-8-->
            </div>
            <!--end row-->
            <hr>
            <div class="note">(C) 2016 All Rights Reserved</div>
            <!--end note-->
            <div class="numbers">
                <h2>Bonus numbers.</h2>
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>54</figure>
                            <p>Projects done</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>21</figure>
                            <p>Employees</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>48</figure>
                            <p>Satisfied Clients</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>17</figure>
                            <p>Prices Won</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                </div>
                <!--end row-->
            </div>
            <!--end numbers-->
            <div class="to-top">
                <a href="#page-top" class="arrow-up framed scroll">
                    <i class="arrow_up"></i>
                </a>
            </div>
        </div>
        <!--end container-->
        <div class="background-wrapper">
            <div class="bg-transfer opacity-30">
                <img src="{{asset('img/footer-bg.jpg')}}" alt="">
            </div>
            <div class="background-color background-color-black"></div>
        </div>
        <!--end background-wrapper-->
    </footer>
    <!--end page-footer-->

</div>
<!--end page-wrapper-->

<div class="modal fade apartment-selector" id="floor-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h4>Building A</h4>
                    <h3>Floor 3</h3>
                    <h1 class="modal-title">Apartment 01</h1>
                    <h2>$69,000</h2>
                </div>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="left">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#modal-floor-plan-1" aria-controls="modal-floor-plan-1" role="tab" data-toggle="tab">Floor plan</a></li>
                        <li role="presentation"><a href="#modal-gallery-1" aria-controls="modal-gallery-1" role="tab" data-toggle="tab">Gallery</a></li>
                    </ul>
                    <!--end nav-tabs-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                            <a href="{{asset('img/floor-plan.jpg')}}" class="image-popup"><img src="{{asset('img/floor-plan.jpg')}}" alt=""></a>
                            <div class="note">Click to zoom</div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="modal-gallery-1">
                            <div class="gallery">
                                <div class="one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img src="{{asset('img/gallery-01.jpg')}}" alt="">
                                    <img src="{{asset('img/image-video.jpg')}}" alt="">
                                    <img src="{{asset('img/gallery-02.jpg')}}" alt="">
                                </div>
                            </div>
                            <!--end gallery-->
                            <a href="http://vimeo.com/24506451" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i>Click to take a video tour</a>
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
                <!--end left-->
                <div class="right">
                    <h3>Parameters</h3>
                    <dl>
                        <dt>Kitchen</dt>
                        <dd>24m<sup>2</sup></dd>
                        <dt>Master bedroom</dt>
                        <dd>58m<sup>2</sup></dd>
                        <dt>Balcony</dt>
                        <dd>67m<sup>2</sup></dd>
                        <dt>Toilet</dt>
                        <dd>20m<sup>2</sup></dd>
                        <dt>Living room</dt>
                        <dd>77m<sup>2</sup></dd>
                        <dt>Passage</dt>
                        <dd>48m<sup>2</sup></dd>
                    </dl>
                    <h3>Description</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula mauris at finibus efficitur.
                        Nulla facilisi. Proin sodales nibh id consequat mattis. Phasellus eu consequat nunc.
                    </p>
                    <hr>
                    <figure><a href="#" class="icon"><i class="fa fa-file-pdf-o"></i>Download PDF</a></figure>
                    <figure><a href="#" class="icon"><i class="fa fa-file-image-o"></i>Download Brochure</a></figure>
                </div>
                <!--end right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<!--end outer-wrapper-->
<script type="text/javascript" src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scrollReveal.min.js')}}"></script>
<!--<script type="text/javascript" src="assets/js/jquery.appear.js"></script>-->
<!--<script type="text/javascript" src="assets/js/waypoints.min.js"></script>-->
<script type="text/javascript" src="{{asset('js/readmore.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pace.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<script type="text/javascript">
    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "{{asset('img/map-marker.png')}}";
    var mapTheme = "light";
    google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme));
</script>


</body>
