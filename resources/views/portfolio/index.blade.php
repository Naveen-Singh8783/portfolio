<!DOCTYPE html>
<html lang="en">
<head>
    @foreach($posts as $post)
        @if($loop->first)
            <title>{{ $post->title }} | Portfolio</title>
        @endif
     @endforeach
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sass/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('sass/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sass/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sass/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('sass/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('sass/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('sass/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('sass/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('sass/style.css')}}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


@foreach($posts as $post)
    {{--@if($loop -> first)--}}
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">




                <a class="navbar-brand" href="index.html">Portfolio</a>


            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                    data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>


                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">Hey! I am</span>
                        <h1>{{ $post->title }}</h1>
                        <h2>I'm a
                            <span
                                class="txt-rotate"
                                data-period="2000"
                                data-rotate='[ "Full Stack Web Developer.", "Freelancer.", "UI & UX Developer.", "Graphics Designer.", "Certified Cyber Security Expert." ]'></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                             style="background-image:url({{ asset('images/person-icon-8.png') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p>{{ $post->description }}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>{{ $post->title }}</span></li>
                                <li class="d-flex"><span>Date of birth:</span> <span>{{ $post->dob }}</span></li>
                                <li class="d-flex"><span>Address:</span>
                                    <span>{{ $post->address }}</span></li>
                                <li class="d-flex"><span>Email:</span> <span>{{ $post->email }}</span></li>
                                <li class="d-flex"><span>Phone: </span> <span>+91-{{ $post->phonenum }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="{{ $post->noofprojects }}">0</span>
                                <span>Project complete</span>
                            </p>
                            <p><a href="#"
                                  class="btn btn-primary py-3 px-3">LinkedIn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <li class="ftco-animate"><a href="#"><span class="icon-github"></span></a></li>

                    <a href="#" class="partner"><img
                            src="{{ asset('images/linkedin.png') }}" class="img-fluid" alt="Nitish Kumar"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="{{ asset('images/github-image.png') }}" class="img-fluid"
                                                                             alt="Nitish Kumar"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img
                            src="{{ asset('images/instagram.png') }}" class="img-fluid" alt="Nitish Kumar"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="{{ asset('images/facebook-black-png-1.png')}}"
                                                                                   class="img-fluid" alt="Nitish Kumar"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav id="navi">
                        <ul>
                            <li><a href="#page-1">Education</a></li>
                            <li><a href="#page-2">Projects</a></li>
                            <li><a href="#page-5">Experience</a></li>
                            <li><a href="#page-3">Skills</a></li>
                            {{--<li><a href="#page-4">Awards</a></li>--}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div id="page-1" class="page one">
                        <h2 class="heading">Education</h2>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2019-2021</span>
                                <h2>Bachelor of Science in Computer Science (Hons.)</h2>
                                <span class="position">{{ $post->university }}</span>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2015-2017</span>
                                <h2>Intermediate (12th)</h2>
                                <span class="position">{{ $post->classtw }}</span>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2012-2014</span>
                                <h2>High School</h2>
                                <span class="position">{{ $post->classten }}</span>
                            </div>
                        </div>
                    </div>
                    <div id="page-2" class="page two">
                        <h2 class="heading">Projects</h2>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2017-2020</span>
                                <h2>{{ $post->projectonename }}</h2>
                                <p> {{ $post->projectone }}</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">10/2017 - 09/2018</span>
                                <h2>{{ $post->projecttwoname }}</h2>
                                <p>{{ $post->projecttwo }}</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">08/2018 – 09/2018</span>
                                <h2>{{ $post->projectthreename }}</h2>
                                <p>{{ $post->projectthree }}</p>
                            </div>
                        </div>
                    </div>
                    <div id="page-5" class="page two">
                        <h2 class="heading">Experience</h2>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2019-2020</span>
                                <h2>{{ $post->experienceone }}</h2>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>{{ $post->experiencetwo }}</h2>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>{{ $post->experiencethree }}</h2>
                            </div>
                        </div>
                    </div>
                    <div id="page-3" class="page three">
                        <h2 class="heading">Skills</h2>
                        <div class="row progress-circle mb-5">
                            <div class="col-lg-4 mb-4">
                                <div class="bg-white rounded-lg shadow p-4">
                                    <h2 class="h5 font-weight-bold text-center mb-4">NodeJS</h2>

                                    <!-- Progress bar 1 -->
                                    <div class="progress mx-auto" data-value='90'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
                                        <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
                                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                            <div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
                                        </div>
                                    </div>
                                    <!-- END -->

                                    <!-- Demo info -->
                                    <div class="row text-center mt-4">
                                        <div class="col-6 border-right">
                                            <div class="h4 font-weight-bold mb-0">85%</div>
                                            <span class="small text-gray">Express</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="h4 font-weight-bold mb-0">80%</div>
                                            <span class="small text-gray">Mongoose</span>
                                        </div>
                                    </div>
                                    <!-- END -->
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="bg-white rounded-lg shadow p-4">
                                    <h2 class="h5 font-weight-bold text-center mb-4">Django</h2>

                                    <!-- Progress bar 1 -->
                                    <div class="progress mx-auto" data-value='94'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
                                        <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
                                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                            <div class="h2 font-weight-bold">94<sup class="small">%</sup></div>
                                        </div>
                                    </div>
                                    <!-- END -->

                                    <!-- Demo info -->
                                    <div class="row text-center mt-4">
                                        <div class="col-6 border-right">
                                            <div class="h4 font-weight-bold mb-0">80%</div>
                                            <span class="small text-gray">REST</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="h4 font-weight-bold mb-0">60%</div>
                                            <span class="small text-gray">Channels</span>
                                        </div>
                                    </div>
                                    <!-- END -->
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="bg-white rounded-lg shadow p-4">
                                    <h2 class="h5 font-weight-bold text-center mb-4">VueJS</h2>

                                    <!-- Progress bar 1 -->
                                    <div class="progress mx-auto" data-value='95'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
                                        <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
                                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                            <div class="h2 font-weight-bold">95<sup class="small">%</sup></div>
                                        </div>
                                    </div>
                                    <!-- END -->

                                    <!-- Demo info -->
                                    <div class="row text-center mt-4">
                                        <div class="col-6 border-right">
                                            <div class="h4 font-weight-bold mb-0">90%</div>
                                            <span class="small text-gray">ReactJS</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="h4 font-weight-bold mb-0">97%</div>
                                            <span class="small text-gray">JavaScript</span>
                                        </div>
                                    </div>
                                    <!-- END -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>PHP</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="96"
                                             aria-valuemin="0" aria-valuemax="100" style="width:96%">
                                            <span>96%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Laravel</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                                             aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>HTML5</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                                             aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>CSS3</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Java</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Python</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width:98%">
                                            <span>98%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Adobe PhotoShop</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width:92%">
                                            <span>92%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Adobe Illustrator</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width:98%">
                                            <span>98%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Adobe After Effects</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width:88%">
                                            <span>88%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Adobe Premier</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div id="page-4" class="page four">--}}
                        {{--<h2 class="heading">Awards</h2>--}}
                        {{--<div class="resume-wrap d-flex ftco-animate">--}}
                            {{--<div class="icon d-flex align-items-center justify-content-center">--}}
                                {{--<span class="flaticon-ideas"></span>--}}
                            {{--</div>--}}
                            {{--<div class="text pl-3">--}}
                                {{--<span class="date">2014-2015</span>--}}
                                {{--<h2>YouthVibe Web Developer</h2>--}}
                                {{--<!--                            <span class="position">Lovely Profe University</span>-->--}}
                                {{--<p>Awarded 1st Prize in YouthVibe – University Blood Donation Website Development with PHP.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="resume-wrap d-flex ftco-animate">--}}
                            {{--<div class="icon d-flex align-items-center justify-content-center">--}}
                                {{--<span class="flaticon-ideas"></span>--}}
                            {{--</div>--}}
                            {{--<div class="text pl-3">--}}
                                {{--<span class="date">2014-2015</span>--}}
                                {{--<h2>HackTrack 2.0 - Hacker Award</h2>--}}
                                {{--<span class="position">Cambridge University</span>--}}
                                {{--<p>Internship Offer from CEO of TechDefence – Stood Winner by Hacking 56 Websites in 1st semester.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="resume-wrap d-flex ftco-animate">--}}
                            {{--<div class="icon d-flex align-items-center justify-content-center">--}}
                                {{--<span class="flaticon-ideas"></span>--}}
                            {{--</div>--}}
                            {{--<div class="text pl-3">--}}
                                {{--<span class="date">2014-2015</span>--}}
                                {{--<h2>Nation Children Science Congress</h2>--}}
                                {{--<span class="position">Cambridge University</span>--}}
                                {{--<p>State Level Winner of National Children Science Congress 2012 organized by Government of India.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <!--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
                        <div class="desc">
                            <h3 class="mb-5">Web Design</h3>
                            <p>Responsive Web Application are optimized to work on different devices.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
                        <div class="desc">
                            <h3 class="mb-5">Web Security</h3>
                            <p>Secure your Web Application from OWASP top 10 vulnerabilities.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
                        <div class="desc">
                            <h3 class="mb-5">Web Developer</h3>
                            <p>Get your website ready with new web technologies support.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-innovation"></i>
							</span>
                        <div class="desc">
                            <h3 class="mb-5">App Developing</h3>
                            <p>Get your Mobile Application ready which is platform independent.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-ux-design"></i>
							</span>
                        <div class="desc">
                            <h3 class="mb-5">Progressive Web Apps</h3>
                            <p>Now your website works without internet connection.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-idea"></i>
							</span>
                        <div class="desc">
                            <h3 class="mb-5">Machine Learning & AI</h3>
                            <p>Make you Web Application alive.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url({{ asset('images/work-1.jpg') }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url({{ asset('images/work-2.jpg') }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url({{ asset('images/work-3.jpg') }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url({{ asset('images/work-4.jpg') }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url({{ asset('images/work-5.jpg') }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url({{ asset('images/work-6.jpg') }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container-fluid px-md-5">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 shadow">
                        <div class="text">
                            <strong class="number" data-number="7">0</strong>
                            <span>Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 shadow">
                        <div class="text">
                            <strong class="number" data-number="120">0</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 shadow">
                        <div class="text">
                            <strong class="number" data-number="120">0</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <!--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>-->
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Address</h3>
                            <p>{{ $post->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Contact Number</h3>
                            <p><a href="tel://1234567920">+91 - {{ $post->phonenum }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Email Address</h3>
                            <p><a href="mailto:info@yoursite.com">{{ $post->email }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Website</h3>
                            <p><a href="#">www.postfolio.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-4 p-md-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                                  placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url({{ asset('images/person-icon-8.png') }});"></div>
                </div>
            </div>
        </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>Success isn’t always about greatness. It’s about consistency.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://github.com/nkpc14"><span class="icon-github"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/nkpc14"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/yaduvanshi_nitish_kumar/"><span class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.linkedin.com/in/nitishkumarfullstack/"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                            <!--                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>-->
                            <!--                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>-->
                            <!--                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">{{ $post->address }}</span>
                                </li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">+91 {{ $post->phonenum }}</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $post->email }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 0.01;" class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="icon-heart color-danger"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>


    {{--@endif--}}
@endforeach

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
