<header id="ritekhana-header" class="ritekhana-header-one">
            
    <div class="col-md-12">
        <a href="index.html" class="ritekhana-logo"><img src="{{ asset('frontend/images/logo3.png') }}" alt="logo" class="logo" style="width: auto; height: 40px; max-width: 100%;filter: brightness(0) invert(1);"></a>
        <div class="ritekhana-navigation">
            <span class="ritekhana-menu-link">
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
            </span>
            <nav id="main-nav">
                <ul id="main-menu" class="sm sm-blue">
                    <li class="active"><a href="/frontend/app">Home</a></li>
                    <li><a href="#">Academics</a>
                        <ul>
                            <li><a href="listing-grid.html">Courses</a></li>
                            <li><a href="listing-list.html">Programs</a></li>
                            <li><a href="listing-detail.html">Course Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Research</a>
                        <ul>
                            <li><a href="blog-large.html">Research Overview</a></li>
                            <li><a href="blog-grid.html">Research Areas</a></li>
                            <li><a href="blog-detail.html">Research Detail</a></li>
                        </ul>
                    </li>
                    <li class="megamenu-wrap"><a href="#">Student Portal</a>
                        <ul class="ritekhana-megamenu">
                           <li class="row">
                              <div class="col-md-2">
                                 <h4>Student Services</h4>
                                 <div class="ritekhana-megalist">
                                    <div class="list"><a href="dashboard-profile.html">My Profile</a></div>
                                    <div class="list"><a href="dashboard-earnings.html">Scholarships</a></div>
                                    <div class="list"><a href="change-password.html">Change Password</a></div>
                                    <div class="list"><a href="reservations.html">Accommodation</a></div>
                                    <div class="list"><a href="priceplan.html">Tution Fees</a></div>
                                    <div class="list"><a href="signup.html">Signup/Login</a></div>
                                    <div class="list"><a href="gallery-masonry.html">Student Gallery</a></div>
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <h4>Academic Tools</h4>
                                 <div class="ritekhana-megalist">
                                    <div class="list"><a href="dashboard-reviews.html">Exam Results</a></div>
                                    <div class="list"><a href="recent-booking.html">Libarary Access</a></div>
                                    <div class="list"><a href="my-restaurant.html">Study Groups</a></div>
                                    <div class="list"><a href="404.html">404 Page</a></div>
                                    <div class="list"><a href="gallery-simple.html">Events</a></div>
                                    <div class="list"><a href="gallery-simple-4col.html">Clubs & Societies</a></div>
                                    <div class="list"><a href="search-result.html">Search Courses</a></div>
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <h4>Resources</h4>
                                 <div class="ritekhana-megalist">
                                    <div class="list"><a href="dashboard-withdrawal.html">Funding & Grants</a></div>
                                    <div class="list"><a href="my-orders.html">Course Materials</a></div>
                                    <div class="list"><a href="dashboard-packages.html">Student Packages</a></div>
                                    <div class="list"><a href="listing-list.html">Course Listings</a></div>
                                    <div class="list"><a href="listing-grid.html">Program Overview</a></div>
                                    <div class="list"><a href="listing-detail.html">Program Details</a></div>
                                    <div class="list"><a href="contact-us.html">Contact Administration</a></div>
                                    
                                 </div>
                              </div>
                              <div class="col-md-6 ritekhana-megamenu-thumb">
                                 <img src="{{ asset('frontend/extra-images/megamenu-frame.jpg') }}" alt="">
                              </div>
                           </li>
                        </ul>
                    </li>
                    <li><a href="#">Information</a>
                        <ul>
                            <li><a href="reservations.html">Student Accommodation</a></li>
                            <li><a href="priceplan.html">Tution Fees</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="search-result.html">Course Result</a></li>
                            <li><a href="signup.html">Signup/Login</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <form action="{{ route('fetchNews') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="ritekhana-header-btn">Browse News</button>
        </form>
        

        <form action="{{ route('logout') }}" method="GET" style="display: inline;">
            @csrf
            <button type="submit" class="ritekhana-header-btn">Logout</button>
        </form>
        <ul class="ritekhana-user-section">
            <li><a href="signup.html">Login</a></li>
            <li><a href="signup.html">Register</a></li>
        </ul>
    </div>
    
</header>