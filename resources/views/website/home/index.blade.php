<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('/')}}website/assets/images/favicon.png" rel="icon">
    <title>Shanto Portfolio</title>
    <meta name="description" content="Simone is responsive bootstrap 5 one page personal portfolio html template.">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts -->
    <link href="{{asset('/')}}website/assets/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheet
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/vendor/font-awesome/css/all.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>

<body class="side-header" data-bs-spy="scroll" data-bs-target="#header-nav" data-bs-offset="1">

<!-- Preloader -->
<div class="preloader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
=============================== -->
<div id="main-wrapper">
    <!-- Header
    ============================ -->
    <header id="header" class="sticky-top">
        <!-- Navbar -->
        <nav class="primary-menu navbar navbar-expand-lg navbar-dark bg-dark border-bottom-0">
            <div class="container-fluid position-relative h-100 flex-lg-column ps-3 px-lg-3 pt-lg-3 pb-lg-2">

                @foreach($personals as $personal)
                <!-- Logo -->
                <a href="{{ route('home') }}" class="mb-lg-auto mt-lg-4">
			<span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">
				<img class="img-fluid rounded-pill d-block" src="{{asset($personal->image)}}" title="I'm Shanto" alt="" />
			</span>
                    <h1 class="text-5 text-white text-center mb-0 d-lg-block">{{$personal->name}}</h1>
                </a>
                @endforeach
                <!-- Logo End -->

                <div id="header-nav" class="collapse navbar-collapse w-100 my-lg-auto">
                    <ul class="navbar-nav text-lg-center my-lg-auto py-lg-3">
                        <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">What I Do</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#testimonial">Testimonial</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                    </ul>
                </div>
                <ul class="social-icons social-icons-muted social-icons-sm mt-lg-auto ms-auto ms-lg-0 d-flex">
                    <li class="social-icons-twitter"><a data-bs-toggle="tooltip" title="Stack Overflow" href="https://stackoverflow.com/users/22731181/md-shanto-hossain" target="_blank"><i class="fab fa-stack-overflow"></i></a></li>
                    <li class="social-icons-facebook"><a data-bs-toggle="tooltip" title="Facebook" href="https://www.facebook.com/mdshanto.hossain.526" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-dribbble"><a data-bs-toggle="tooltip" title="LinkedIn" data-bs-placement="top" href="https://www.linkedin.com/in/md-shanto-hosssain-4ab5a1290/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li class="social-icons-github"><a data-bs-toggle="tooltip" title="GitHub" data-bs-placement="top" href="https://github.com/md-shanto-hoss" target="_blank"><i class="fab fa-github"></i></a></li>
                </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>
    <!-- Header End -->

    <!-- Content
    ============================================= -->
    <div id="content" role="main">

        <!-- Intro
        ============================================= -->
        <section id="home">
            <div class="hero-wrap">
                <div class="hero-mask opacity-8 bg-dark"></div>
                <div class="hero-bg parallax" style="background-image:url('{{asset('/')}}website/assets/images/intro-bg.jpg');"></div>
                <div class="hero-content section d-flex min-vh-100">
                    <div class="container my-auto">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="typed-strings">
                                    <p>I'm Md Shanto Hossain</p>
                                    <p>I'm a Developer.</p>
                                    <p>I'm a Freelancer.</p>
                                </div>
                                <p class="text-7 fw-500 text-white mb-2 mb-md-3">Welcome</p>
                                <h2 class="text-16 fw-600 text-white mb-2 mb-md-3"><span class="typed"></span></h2>
                                <p class="text-5 text-light mb-4">Based in Dhaka, Bangladesh.</p>
                                <a href="#contact" class="btn btn-outline-primary rounded-pill shadow-none smooth-scroll mt-2">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span class="animated"><i class="fa fa-chevron-down"></i></span></a> </div>
            </div>
        </section>
        <!-- Intro end -->

        <!-- About
        ============================================= -->
        <section id="about" class="section">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">About Me</h2>
                    <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">Know Me More<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
                </div>
                <!-- Heading end-->
                @foreach($personals as $personal)
                    <div class="row gy-5">
                        <div class=" col-md-12 text-center text-lg-start">
                            <h2 class="text-7 fw-600 mb-3">I'm <span class="text-primary">{{$personal->name}}</span> a Web Developer</h2>
                            <p>{{$personal->description}} </p>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-5">
                        <div class=" col-md-4">
                            <div class="ps-lg-4">
                                <ul class="list-style-2">
                                    <li class=""><span class="fw-600 me-2">Name:</span>{{$personal->name}}</li>
                                    <li class=""><span class="fw-600 me-2">Email:</span><a href="#">{{$personal->email}}</a></li>
                                    <li class=""><span class="fw-600 me-2">Age:</span>{{$personal->age}}</li>
                                    <li class="border-0"><span class="fw-600 me-2">From:</span>{{$personal->location}}</li>
                                </ul>
                                <a href="{{ route('download.cv') }}" class="btn btn-primary rounded-pill">Download CV</a> </div>
                        </div>
                    </div>
            @endforeach
        </section>
        <!-- About end -->

        <!-- Services
        ============================================= -->
        <section id="services" class="section bg-light">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">Services</h2>
                    <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">What I Do?<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
                </div>
                <!-- Heading end-->
                @foreach($services as $service)
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="featured-box style-3 mb-5">
                                    <div class="featured-box-icon text-primary bg-white shadow-sm rounded"><img src="{{asset($service->image)}}" height="70" width="70" alt=""> </div>
                                    <h3>{{$service->name}}</h3>
                                    <p class="mb-0">{{$service->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- Services end -->

        <!-- Resume
        ============================================= -->
        <section id="resume" class="section">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">Summary</h2>
                    <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">Resume<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
                </div>
                <!-- Heading end-->

                <div class="row gx-5">
                    <!-- My Education -->
                    <div class="col-md-6">
                        <h2 class="text-6 fw-600 mb-4">My Education</h2>
                        @foreach($educations as $education)
                        <div class="bg-white border rounded p-4 mb-4">
                            <p class="badge bg-primary text-2 fw-400">{{$education->starting_year}} - {{$education->ending_year}}</p>
                            <h3 class="text-5">{{$education->name}}</h3>
                            <p class="text-danger">{{$education->university_name}}</p>
                            <p class="mb-0">{{$education->description}}</p>
                        </div>
                        @endforeach
                    </div>

                    <!-- My Experience -->
                    <div class="col-md-6">
                        <h2 class="text-6 fw-600 mb-4">My Experience</h2>
                        @foreach($experiences as $experience)
                        <div class="bg-white border rounded p-4 mb-4">
                            <p class="badge bg-primary text-2 fw-400">{{$experience->starting_year}} - {{$experience->ending_year}}</p>
                            <h3 class="text-5">{{$experience->name}}</h3>
                            <p class="text-danger">{{$experience->company_name}}</p>
                            <p class="mb-0">{{$experience->description}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- My Skills -->
            </div>
        </section>
        <!-- Resume end -->

        <!-- Portfolio
        ============================================= -->
        <section id="portfolio" class="section bg-light">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">Portfolio</h2>
                    <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">My Work<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
                </div>
                <!-- Heading end-->

                <!-- Filter Menu -->
                <ul class="portfolio-menu nav nav-tabs justify-content-center border-bottom-0 mb-5">
                    <li class="nav-item"> <a data-filter="*" class="nav-link active" href="">All</a></li>
                    <li class="nav-item"> <a data-filter=".design" href="" class="nav-link">Design</a></li>
                    <li class="nav-item"> <a data-filter=".brand" href="" class="nav-link">Brand</a></li>
                    <li class="nav-item"> <a data-filter=".photos" href="" class="nav-link">Photos</a></li>
                </ul>
                <!-- Filter Menu end -->
                <div class="portfolio popup-ajax-gallery">
                    <div class="row portfolio-filter g-4">
                        @foreach($works as $work)
                        <div class="col-sm-6 col-lg-4 brand">
                            <div class="portfolio-box rounded">
                                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="{{asset($work->image)}}" height="225" width="340" alt="">
                                    <div class="portfolio-overlay"> <a class="popup-ajax stretched-link" href=""></a>
                                        <div class="portfolio-overlay-details">
                                            <h5 class="text-white fw-400">{{$work->name}}</h5>
                                            <span class="text-light">Category</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio end -->

        <!-- Testimonial
        ============================================= -->
        <section id="testimonial" class="section">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">Testimonial</h2>
                    <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">Client Speak<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
                </div>
                <!-- Heading end-->

                <div class="owl-carousel owl-theme" data-loop="true" data-nav="false" data-autoplay="false" data-margin="25" data-stagepadding="0" data-slideby="1" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2">
                    @foreach($reviews as $review)
                    <div class="item">
                        <div class="bg-light p-5">
                            <div class="d-flex align-items-center  mb-4">
                                <img class="img-fluid rounded-circle d-inline-block w-auto review-image" src="{{ asset($review->image) }}" alt="" />
                                <p class="ms-3 mb-0">
                                    <strong class="d-block text-dark fw-600">{{$review->name}}</strong>
                                    <span class="text-muted fw-500">{{ $review->from }}</span>
                                </p>
                            </div>
                            <p class="text-dark fw-500 mb-4">“{{ $review->description }}”</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-md-6 col-xl-8 order-0 order-md-1 mx-auto">
                    <h2 class="mb-3 text-5 text-uppercase text-center text-md-start">Send me a review</h2>
                    <form action="{{ route('review') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <input name="name" type="text" class="form-control" placeholder="Name" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="col-xl-6">
                                <input name="from" type="text" class="form-control"  placeholder="From" />
                                <span class="text-danger">{{ $errors->has('from') ? $errors->first('from') : '' }}</span>
                            </div>
                            <div class="col">
                                <textarea name="description" class="form-control" rows="5"  placeholder="Description of your review........"></textarea>
                                <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                            </div>
                            <div class="">
                                <input name="image" type="file" class="form-control-file mb-2" />
                                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                            </div>
                        </div>

                        <p class="text-center mt-4 mb-0">
                            <button id="submit-btn" class="btn btn-primary rounded-pill d-inline-flex" type="submit">Send Review</button>
                        </p>
                    </form>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- Contact Me
        ============================================= -->
        <section id="contact" class="section bg-light">
            <div class="container px-lg-5">
                <!-- Heading -->
                <div class="position-relative d-flex text-center mb-5">
                    <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">Contact</h2>
                    <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">Get in Touch<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
                </div>
                <!-- Heading end-->
                <div class="row gy-5">
                    <div class="col-md-6 col-xl-4 order-1 order-md-0 text-center text-md-start">
                        <h2 class="mb-3 text-5 text-uppercase">Address</h2>
                        <p class="text-3 mb-4">5th Floor,<br>
                            North Jatrabari, Dhaka-1204
                        </p>
                        <p class="text-3 mb-1"><span class="text-primary text-4 me-2"><i class="fas fa-phone"></i></span>(+880) 1799630818</p>
                        <p class="text-3 mb-4"><span class="text-primary text-4 me-2"><i class="fas fa-envelope"></i></span>mdshantohossain800@gmail.com</p>
                        <h2 class="mb-3 text-5 text-uppercase">Follow Me</h2>
                        <ul class="social-icons justify-content-center justify-content-md-start">
                            <li class="social-icons-dribbble"><a data-bs-toggle="tooltip" href="https://stackoverflow.com/users/22731181/md-shanto-hossain" target="_blank" title="stack overflow"><i class="fab fa-stack-overflow"></i></a></li>
                            <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="https://www.facebook.com/mdshanto.hossain.526" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-google"><a data-bs-toggle="tooltip" href="https://www.linkedin.com/in/md-shanto-hosssain-4ab5a1290/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a></li>
                            <li class="social-icons-github"><a data-bs-toggle="tooltip" href="https://github.com/md-shanto-hoss" target="_blank" title="GitHub"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xl-8 order-0 order-md-1">
                        <h2 class="mb-3 text-5 text-uppercase text-center text-md-start">Send me a note</h2>
                        <form action="{{ route('hire.me') }}" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-xl-6">
                                    <input name="email" type="email" class="form-control"  placeholder="Email">
                                </div>
                                <div class="col">
                                    <textarea name="message" class="form-control" rows="5"  placeholder="Tell us more about your needs........"></textarea>
                                </div>
                            </div>

                            <p class="text-center mt-4 mb-0">
                                <button id="submit-btn" class="btn btn-primary rounded-pill d-inline-flex" type="submit">Send Message</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Me end -->

    </div>
    <!-- Content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="section">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start">
                    <p class="mb-3 mb-lg-0">Copyright © 2022 <a href="#" class="fw-500">Simone</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-separator justify-content-center justify-content-lg-end">
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#terms-policy" href="#">Terms & Policy</a></li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#disclaimer" href="#">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" class="rounded-circle" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Terms & Policy Modal
================================== -->
<div id="terms-policy" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Terms & Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <h3 class="mb-3 mt-4 mt-4">Terms of Use</h3>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Simply dummy text of the printing and typesetting industry.</p>
                <h5 class="text-4 mt-4">Part I – Information Simone collects and controls</h5>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h5 class="text-4 mt-4">Part II – Information that Simone processes on your behalf</h5>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h5 class="text-4 mt-4">Part III – General</h5>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h3 class="mb-3 mt-4">Privacy Policy</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <ol class="lh-lg">
                    <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
                    <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Terms & Policy Modal End -->

<!-- Disclaimer Modal
================================== -->
<div id="disclaimer" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Copyright & Disclaimer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <ul class="lh-lg">
                    <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
                    <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                    <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Disclaimer Modal End -->

<!-- Styles Switcher -->
<div id="styles-switcher" class="right">
    <h2 class="text-3">Color Switcher</h2>
    <hr>
    <ul>
        <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
        <li class="blue" data-bs-toggle="tooltip" title="Blue" data-path="css/color-blue.css"></li>
        <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
        <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
        <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
        <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
        <li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css"></li>
        <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
        <li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
        <li class="brown" data-bs-toggle="tooltip" title="Brown" data-path="css/color-brown.css"></li>
    </ul>
    <button class="btn btn-dark btn-sm w-100 border-0 fw-400 rounded-0 shadow-none" id="reset-color">Reset Default Teal</button>
    <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End -->

<!-- JavaScript -->
<script src="{{asset('/')}}website/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Easing -->
<script src="{{asset('/')}}website/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<!-- Appear -->
<script src="{{asset('/')}}website/assets/vendor/jquery.appear/jquery.appear.min.js"></script>
<!-- Images Loaded -->
<script src="{{asset('/')}}website/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Counter -->
<script src="{{asset('/')}}website/assets/vendor/jquery.countTo/jquery.countTo.min.js"></script>
<!-- Parallax Bg -->
<script src="{{asset('/')}}website/assets/vendor/parallaxie/parallaxie.min.js"></script>
<!-- Typed -->
<script src="{{asset('/')}}website/assets/vendor/typed/typed.min.js"></script>
<!-- Owl Carousel -->
<script src="{{asset('/')}}website/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<!-- isotope Portfolio Filter -->
<script src="{{asset('/')}}website/assets/vendor/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('/')}}website/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Style Switcher -->
<script src="{{asset('/')}}website/assets/js/switcher.min.js"></script>
<!-- Custom Script -->
<script src="{{asset('/')}}website/assets/js/theme.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('message'))
    <script>
        $(document).ready(function (){
            toastr.success('{{ Session::get('message') }}');
        })
    </script>
@endif
</body>
</html>
