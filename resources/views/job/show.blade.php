@extends('layouts.app')

@push('styles')

@endpush

@section('breadcrumbs')
{{--    {{ Breadcrumbs::render('home') }}--}}
@endsection

@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Job Details</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Job Details</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="job-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-1.png" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3>Finance & Accounts</h3>
                                    <span class="sub-title">Finix loans & funding agency</span>
                                    <ul>
                                        <li><span>Vacancy:</span> 01</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="#" class="default-btn">Apply Now</a>
                                    <p><span>Deadline: </span>Dec 30, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-details-content">
                        <h3>Job Description</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur</p>
                        <h4>Responsibilities:</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi aspernatur modi doloribus dolorem quidem! Neque placeat numquam vel magni ipsam, similique eligendi sunt laudantium, nihil alias soluta eos in Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nam eveniet quasi.</p>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                        </ul>
                        <h4>Qualifications:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                        </ul>
                        <h4>Competencies:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, </li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua.</li>
                        </ul>
                        <h4>Experience Requirements:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="job-details-sidebar">
                        <div class="job-widget">
                            <h3>Share This Job</h3>
                            <ul class="social-icon">
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-linkedin-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="job-widget">
                            <h3>Job Overview</h3>
                            <ul class="overview">
                                <li>
                                    Published On
                                    <span>: Oct 01, 2020</span>
                                </li>
                                <li>
                                    Vacancy
                                    <span>: 01</span>
                                </li>
                                <li>
                                    Job Type
                                    <span>: Part Time</span>
                                </li>
                                <li>
                                    Experience
                                    <span>: 3 Year(s)</span>
                                </li>
                                <li>
                                    Job Location
                                    <span>: Alaska(s)</span>
                                </li>
                                <li>
                                    Category
                                    <span>: Finance</span>
                                </li>
                                <li>
                                    Gender
                                    <span>: Both</span>
                                </li>
                                <li>
                                    Salary
                                    <span>: $700.00</span>
                                </li>
                                <li>
                                    Application Deu
                                    <span>: 10.11.2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="subscribe-area subscribe-area-about-page">
        <div class="container">
            <div class="subscribe-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="subscribe-content">
                            <h2>Find Your Next Great Job Opportunity!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required="" autocomplete="off">
                            <button class="default-btn" type="submit">
                                <span>Subscribe</span>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                            <p>Join The Newsletter 10,000 Users Already!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush
