@extends('frontend.layout.main')

@section('main-container')


    <section id="sb-home" style="background-image: url({{('frontend/images/hero-bg.png')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="hero-left wow fadeInUp"  data-wow-delay="0.3s">
                        <h1>Our target is to <span>Reach </span>the goal</h1>
                        <p>Our vertical solutions expertise allows
                            your business to streamline workflow.</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero-right wow fadeInUp"  data-wow-delay="0.3s">
                        <img src="{{url('frontend/images/hero-img.png')}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Service Section -->
    <section id="service" class="pr3-service-section" style="background-image: url({{url('frontend/images/net-shape.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pr3-title-area text-center wow fadeInUp">
                        <div class="pr3-headline">
                            <span>Service</span>
                            <div class="pr3-headline">
                                <h3>What service we are providing?</h3>
                            </div>
                            <div class="pr3-pera-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pr3-service-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="pr3-service-column wow fadeInUp">
                            <div class="pr3-icon-wrapper">
                                <img src="{{url('frontend/images/ecommerce.png')}}">
                            </div>
                            <div class="pr3-headline">
                                <h5>Websites + eCommerce </h5>
                            </div>
                            <div class="pr3-pera-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. eiusmod tempo..</p>
                            </div>
                            <a href="#">Learn more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="pr3-service-column  wow fadeInUp" data-wow-delay="0.1s">
                            <div class="pr3-icon-wrapper">
                                <img src="{{url('frontend/images/web.png')}}">
                            </div>
                            <div class="pr3-headline">
                                <h5>Software development </h5>
                            </div>
                            <div class="pr3-pera-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. eiusmod tempo..</p>
                            </div>
                            <a href="#">Learn more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pr3-service-column  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="pr3-icon-wrapper">
                                <img src="{{url('frontend/images/web-hosting.png')}}">
                            </div>
                            <div class="pr3-headline">
                                <h5>Website Hosting </h5>
                            </div>
                            <div class="pr3-pera-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. eiusmod tempo..</p>
                            </div>
                            <a href="#">Learn more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pr3-service-column wow fadeInUp" data-wow-delay="0.3s">
                            <div class="pr3-icon-wrapper">
                                <img src="{{url('frontend/images/office.png')}}">
                            </div>
                            <div class="pr3-headline">
                                <h5>Microsoft (Office) 365 </h5>
                            </div>
                            <div class="pr3-pera-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. eiusmod tempo..</p>
                            </div>
                            <a href="#">Learn more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="pr3-service-column wow fadeInUp" data-wow-delay="0.4s">
                            <div class="pr3-icon-wrapper">
                                <img src="{{url('frontend/images/internet.png')}}">
                            </div>
                            <div class="pr3-headline">
                                <h5>Telephony (VoIP) & Internet (NBN) </h5>
                            </div>
                            <div class="pr3-pera-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. eiusmod tempo..</p>
                            </div>
                            <a href="#">Learn more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pr3-service-column wow fadeInUp" data-wow-delay="0.5s">
                            <div class="pr3-icon-wrapper">
                                <img src="{{url('frontend/images/seo-report.png')}}">
                            </div>
                            <div class="pr3-headline">
                                <h5>Search Engine Optimisation </h5>
                            </div>
                            <div class="pr3-pera-txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. eiusmod tempo..</p>
                            </div>
                            <a href="#">Learn more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Service Section End -->



    <!-- Start of testimonial  section
        ============================================= -->
    <section id="testimonial" class="testimonial-section position-relative"
        style="background-image: url({{url('frontend/images/testimonial-bg.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pr3-title-area text-center wow fadeInUp">
                        <div class="pr3-headline">
                            <span class="text-white">Testionials</span>
                            <div class="pr3-headline">
                                <h3 class="text-white">What People Says</h3>
                            </div>
                            <div class="pr3-pera-txt">
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-gym-testimonial-content">
                <div class="app-gym-testimonial-slider owl-carousel wow fadeInUp"  data-wow-delay="0.3s">
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon1.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>Web Developer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah1.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon2.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>Software Engineer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah2.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon3.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>UX/UI Designer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah3.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon1.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>Web Developer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah1.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon2.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>Software Engineer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah2.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon3.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>UX/UI Designer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah3.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon1.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>Web Developer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah1.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon2.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>Software Engineer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah2.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-gym-testimonial-innerbox">
                        <div class="app-gym-testimonial-wrap position-relative">
                            <div class="app-gym-testimonial-icon position-relative text-center">
                                <img src="{{url('frontend/images/tst-icon3.png')}}" alt="">
                            </div>
                            <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                <p>Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit
                                    anim</p>
                                <div class="app-gym-testimonial-author">
                                    <h3><a href="#">Johnson Doe</a></h3>
                                    <span>UX/UI Designer</span>
                                </div>
                                <div class="app-gym-testimonial-img-wrapper position-relative">
                                    <span class="app-gym-tst-shape1 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh1.png')}}" alt=""></span>
                                    <span class="app-gym-tst-shape2 position-absolute"><img
                                            src="{{url('frontend/images/tst-sh2.png')}}" alt=""></span>
                                    <div class="app-gym-testimonial-img">
                                        <img src="{{url('frontend/images/tst-ah3.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End of testimonial  section
        ============================================= -->

@endsection