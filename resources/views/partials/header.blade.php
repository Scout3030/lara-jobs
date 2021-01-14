<header class="header-area">

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="header-left-content">
                        <li>
                            <span>Hot Line</span>
                            <a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header-right-content">
                        <ul class="language">
                            <li>
                                <div class="dropdown language-btn">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span>
                                            Language
                                            <i class="bx bx-chevron-down"></i>
                                        </span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="{{route('set_language', ['lang' => 'en'])}}" class="dropdown-item">
                                            <img src="assets\images\language\english.png" alt="Flag">
                                            <span>{{__('English')}}</span>
                                        </a>
                                        <a href="{{route('set_language', ['lang' => 'es'])}}" class="dropdown-item">
                                            <img src="assets\images\language\arab.png" alt="Flag">
                                            <span>{{__('Spanish')}}</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="assets\images\language\germany.png" alt="Flag">
                                            <span>Germany</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="assets\images\language\portugues.png" alt="Flag">
                                            <span>Português</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="assets\images\language\china.png" alt="Flag">
                                            <span>简体中文</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="log-in">
                            <li>
                                <a href="log-in-register.html">
                                    <i class="bx bxs-lock"></i>
                                    {{__('Log In')}}
                                </a>
                            </li>
                            <li>
                                <a href="log-in-register.html">
                                    <i class="bx bxs-user"></i>
                                    {{__('Register')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area">
        <div class="mobile-nav">
            <div class="container">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="{{route('home.index')}}">
                            <img src="assets\images\logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home.index')}}">
                        <img src="assets\images\logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Home
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Jobs
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="job-listing.html" class="nav-link active">Job Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="post-job.html" class="nav-link">Post A Job</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="job-details.html" class="nav-link">Job Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Candidates
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="candidates-listing.html" class="nav-link">Candidates Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="candidates-details.html" class="nav-link">Candidates Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Candidate Dashboard
                                            <i class="bx bx-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="dashboard.html" class="nav-link">Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="profile.html" class="nav-link">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="resume.html" class="nav-link">Resume</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="bookmarks.html" class="nav-link">Bookmarks</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="applied-jobs.html" class="nav-link">Applied Jobs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="alert-jobs.html" class="nav-link">Alert Jobs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="message.html" class="nav-link">Message</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="change-password.html" class="nav-link">Change Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Employers
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="employers-listing.html" class="nav-link">Employers Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="employers-details.html" class="nav-link">Employers Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about-us.html" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Blog
                                            <i class="bx bx-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blog.html" class="nav-link">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-details.html" class="nav-link">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact-us.html" class="nav-link">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="log-in-register.html" class="nav-link">Log In / Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="freelancer.html" class="nav-link">Freelancer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Error Page</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="others-option">
                            <div class="get-quote">
                                <a href="post-job.html" class="default-btn">
                                    Post a Job
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="get-quote">
                                <a href="post-job.html" class="default-btn">
                                    Post a Job
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
