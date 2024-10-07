@extends('frontend.app')

@section('content')

<div class="ritekhana-main-content">

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-services-view1-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <!--// Services //-->
                    <div class="ritekhana-services ritekhana-services-view1">
                        <ul class="row">
                            <li class="col-md-3">
                                <i class="fab fa-searchengin ritekhana-color"></i>
                                <h2><a href="#">Find Courses</a></h2>
                                <p>Search for available courses and programs suited to your career goals.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="fa fa-book-open ritekhana-color"></i>
                                <h2><a href="#">Access Study Material</a></h2>
                                <p>Get access to textbooks, notes, and resources for your subjects.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="far fa-money-bill-alt ritekhana-color"></i>
                                <h2><a href="#">Payment</a></h2>
                                <p>Pay your fees online with secure payment methods.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="fa fa-chart-line ritekhana-color"></i>
                                <h2><a href="#">Track Progress</a></h2>
                                <p>Check your grades, assignments, and academic progress.</p>
                            </li>
                        </ul>
                    </div>
                    <!--// Services //-->
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title">
                        <h2 class="ritekhana-color">Popular Students</h2>
                        <span>Explore some of the student records </span>
                    </div>
                    <!--// Fancy Title //-->
                    

                    <div class="ritekhana-resturant ritekhana-resturant-view1">
                        <ul class="row justify-content-center">
                            <li class="col-md-6 ">
                                <div class="ritekhana-resturant-view1-wrap">
                                    <div class="ritekhana-resturant-view1-text">
                                        <h2><a href="#">Student Records</a> <span class="ritekhana-color">Enrolled In Computer Science</span></h2>
                                        <div class="ritekhana-resturant-view1-tags">
                                            <a href="#">Programming, </a>
                                            <a href="#">Data Structure </a>
                                            <a href="#">Algorithms </a>
                                            <a href="#">AI</a>
                                        </div>
                                        <p>Students Comprehensive Records</p>
                                        <span class="ritekhana-resturant-view1-loc"><i class="fa fa-map-marker-alt ritekhana-color"></i>Oxford University</span>
                                        <a href="{{ route('frontend.student.records') }}" class="ritekhana-resturant-view1-btn ritekhana-bgcolor">View Records</a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="col-md-6">
                                <div class="ritekhana-resturant-view1-wrap">
                                    <div class="ritekhana-resturant-view1-text">
                                        <h2><a href="#">Vell Kitchen</a> <span class="ritekhana-color">Delivery Time 15 Min</span></h2>
                                        <div class="ritekhana-resturant-view1-tags">
                                            <a href="#">Beverage, </a>
                                            <a href="#">Burgers, </a>
                                            <a href="#">Fast Food, </a>
                                            <a href="#">Wraps</a>
                                        </div>
                                        <p>Sed consequat sapien faus quam bibendum convallis quis in nulla Pellentesque.</p>
                                        <span class="ritekhana-resturant-view1-loc"><i class="fa fa-map-marker-alt ritekhana-color"></i> 105 Soi Sathon 2</span>
                                        <a href="#" class="ritekhana-resturant-view1-btn ritekhana-bgcolor">Order Now</a>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <!--// Popular Resturant //-->

                    <div class="ritekhana-resturant-viewall"><a href="{{ route('frontend.student.records') }}" class="ritekhana-bgcolor">View All Records</a></div>

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-browse-dishes-links-full">
        <span class="ritekhana-white-transparent"></span>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="ritekhana-fancy-title white-color">
                        <h2 class="ritekhana-color">Browse By Oxford Topics</h2>
                        <span>Explore a variety of subjects and courses offered at Oxford.</span>
                    </div>

                    <div class="ritekhana-browse-dishes-links">
                        <ul>
                            <li><a href="#">Philosophy</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Literature</a></li>
                            <li><a href="#">Mathematics</a></li>
                            <li><a href="#">Physics</a></li>
                            <li><a href="#">Biology</a></li>
                            <li><a href="#">Computer Science</a></li>
                            <li><a href="#">Economics</a></li>
                            <li><a href="#">Political Science</a></li>
                            <li><a href="#">Art History</a></li>
                            <li><a href="#">Classics</a></li>
                            <li><a href="#">Linguistics</a></li>
                            <li><a href="#">Environmental Science</a></li>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Psychology</a></li>
                            <li><a href="#">Sociology</a></li>
                            <li><a href="#">Theology</a></li>
                            <li><a href="#">Geography</a></li>
                            <li><a href="#">Medicine</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Chemistry</a></li>
                            <li><a href="#">Mathematical Sciences</a></li>
                            <li><a href="#">Statistics</a></li>
                            <li><a href="#">Film Studies</a></li>
                            <li><a href="#">Gender Studies</a></li>
                            <li><a href="#">Visual Arts</a></li>
                            <li><a href="#">Management Studies</a></li>
                            <li><a href="#">Human Rights</a></li>
                            <li><a href="#">Social Work</a></li>
                        </ul>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-parallax-view1-full">
        <div class="container">

        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title">
                        <h2 class="ritekhana-color">Explore Hot location</h2>
                    </div>
                    <!--// Fancy Title //-->

                    <!--// Resturant Gallery //-->
                    <div class="ritekhana-resturant-gallery ritekhana-resturant-gallery-view1">
                        <ul class="row">
                            <li class="col-md-6">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/pic.jpeg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Denmark</a></h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/photo.jpeg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Chicago</a></h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/dow.jpeg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Denver</a></h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/wnl.jpeg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Los Vegas</a></h2>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    <!--// Resturant Gallery //-->

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <!--// Main Section //-->

    <!--// Main Section //-->
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-partner-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title">
                        <h2 class="ritekhana-color">Our Affiliates</h2>
                        <span>Explore our collaborations with esteemed institutions and organizations.</span>
                    </div>
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-partner">
                        <ul>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-2.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-3.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-4.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-3.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-4.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-2.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

</div>

@endsection