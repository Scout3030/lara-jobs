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
                <h2>Job Listing</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Job Listing</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="job-listing-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form class="search-job">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="job-title" placeholder="Job title, skills, or company">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="job-title-2" placeholder="City, State, or zip">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="default-btn">
                                    <i class="bx bx-search"></i>
                                    Search Jobs
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="time-and-hour">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="rated">
                                    <p>Start By</p>
                                    <select>
                                        <option value="1">Top Rated</option>
                                        <option value="2">Mid Rated</option>
                                        <option value="3">Low Rated</option>
                                        <option value="3">Per/hour</option>
                                        <option value="4">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="show-page">
                                    <p>Show Per Page</p>
                                    <select>
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option value="3">30</option>
                                        <option value="4">40</option>
                                        <option value="5">50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-1.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Finance & Accounts</a></h3>
                                    <span class="sub-title">Finix loans & funding agency</span>
                                    <ul>
                                        <li><span>Education:</span> BBA / M.A.</li>
                                        <li><span>Experience: </span>At Least 1 Year(s)</li>
                                        <li><span>Location: </span>New York</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Dec 30, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-2.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Assistant Manager</a></h3>
                                    <span class="sub-title">Leve bank ltd</span>
                                    <ul>
                                        <li><span>Education:</span> BBA / M.A.</li>
                                        <li><span>Experience: </span>At Least 2 Year(s)</li>
                                        <li><span>Location: </span>Alaska</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Nov 30, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-3.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Mechanical Engineer</a></h3>
                                    <span class="sub-title">Conzio construction</span>
                                    <ul>
                                        <li><span>Education:</span> B.Sc</li>
                                        <li><span>Experience: </span>At Least 1 Year(s)</li>
                                        <li><span>Location: </span>Washington</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Dec 30, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured red">Urgent</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-4.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Teacher - English</a></h3>
                                    <span class="sub-title">Eduon education</span>
                                    <ul>
                                        <li><span>Education:</span> BBA / M.A.</li>
                                        <li><span>Experience: </span>At Least 2 Year(s)</li>
                                        <li><span>Location: </span>Florida</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Nov 30, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-5.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Sr./ Project Manager</a></h3>
                                    <span class="sub-title">Oryx International</span>
                                    <ul>
                                        <li><span>Education:</span> BBA / M.A.</li>
                                        <li><span>Experience: </span>At Least 5 Year(s)</li>
                                        <li><span>Location: </span>California</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Dec 15, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-6.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Service Engineer</a></h3>
                                    <span class="sub-title">Autozon power ltd</span>
                                    <ul>
                                        <li><span>Education:</span> BBA / M.A.</li>
                                        <li><span>Experience: </span>At Least 1 Year(s)</li>
                                        <li><span>Location: </span>New York</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Dec 20, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-7.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Support Executive</a></h3>
                                    <span class="sub-title">Saspol limited</span>
                                    <ul>
                                        <li><span>Education:</span> B.A.</li>
                                        <li><span>Experience: </span>At Least 2 Year(s)</li>
                                        <li><span>Location: </span>Alaska</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Dec 30, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-8.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Research Assistant</a></h3>
                                    <span class="sub-title">Medq medical</span>
                                    <ul>
                                        <li><span>Education:</span> B.Sc</li>
                                        <li><span>Experience: </span>At Least 2 Year(s)</li>
                                        <li><span>Location: </span>Washington</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Dec 15, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured red">Urgent</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-10.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Sr. Manager</a></h3>
                                    <span class="sub-title">Seqty power ltd</span>
                                    <ul>
                                        <li><span>Education:</span> M.A.</li>
                                        <li><span>Experience: </span>At Least 5 Year(s)</li>
                                        <li><span>Location: </span>California</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Dec 15, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img">
                                    <img src="assets\images\hot-jobs\hot-jobs-9.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="job-details.html">Content Writing</a></h3>
                                    <span class="sub-title">Depan insider ltd.</span>
                                    <ul>
                                        <li><span>Education:</span> BBA / M.A.</li>
                                        <li><span>Experience: </span>At Least 3 Year(s)</li>
                                        <li><span>Location: </span>Florida</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="job-details.html" class="default-btn">Browse Job</a>
                                    <p><span>Deadline: </span>Nov 30, 2020</p>
                                </div>
                            </div>
                        </div>
                        <span class="featured">Featured</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area">
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="#" class="page-numbers">2</a>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="next page-numbers">
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="job-listing-sidebar">
                        <div class="job-listing-widget">
                            <ul class="accordion-widget">
                                <li class="accordion-item">
                                    <a class="accordion-widget-title active" href="javascript:void(0)">
                                        <h3>Job Type</h3>
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="accordion-widget-content show">
                                        <li>
                                            <label class="single-check">
                                                All
                                                <input type="radio" checked="checked" name="radio-1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Full-time
                                                <input type="radio" checked="checked" name="radio-1">
                                                <span class="checkmark"></span>
                                                <span class="count">(8954)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Part-time
                                                <input type="radio" checked="checked" name="radio-1">
                                                <span class="checkmark"></span>
                                                <span class="count">(354)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Temporary
                                                <input type="radio" checked="checked" name="radio-1">
                                                <span class="checkmark"></span>
                                                <span class="count">(83)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Contract
                                                <input type="radio" checked="checked" name="radio-1">
                                                <span class="checkmark"></span>
                                                <span class="count">(1291)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Internship
                                                <input type="radio" checked="checked" name="radio-1">
                                                <span class="checkmark"></span>
                                                <span class="count">(954)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="job-listing-widget">
                            <ul class="accordion-widget">
                                <li class="accordion-item">
                                    <a class="accordion-widget-title active" href="javascript:void(0)">
                                        <h3>Date Posted</h3>
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="accordion-widget-content show">
                                        <li>
                                            <label class="single-check">
                                                All
                                                <input type="radio" checked="checked" name="radio-2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Last Hour
                                                <input type="radio" checked="checked" name="radio-2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Last 24 hours
                                                <input type="radio" checked="checked" name="radio-2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Last 7 days
                                                <input type="radio" checked="checked" name="radio-2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Last 14 days
                                                <input type="radio" checked="checked" name="radio-2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Last 30 days
                                                <input type="radio" checked="checked" name="radio-2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="job-listing-widget">
                            <ul class="accordion-widget">
                                <li class="accordion-item">
                                    <a class="accordion-widget-title active" href="javascript:void(0)">
                                        <h3>Salary</h3>
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="accordion-widget-content show">
                                        <li>
                                            <label class="single-check">
                                                All
                                                <input type="radio" checked="checked" name="radio-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Monthly
                                                <input type="radio" checked="checked" name="radio-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Weekly
                                                <input type="radio" checked="checked" name="radio-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Daily
                                                <input type="radio" checked="checked" name="radio-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Hourly
                                                <input type="radio" checked="checked" name="radio-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Yearly
                                                <input type="radio" checked="checked" name="radio-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <form class="price-range-content">
                                                <div class="price-range-bar" id="range-slider"></div>
                                                <div class="price-range-filter">
                                                    <div class="price-range-filter-item">
                                                        <input type="text" id="price-amount" readonly="">
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="job-listing-widget">
                            <ul class="accordion-widget">
                                <li class="accordion-item">
                                    <a class="accordion-widget-title active" href="javascript:void(0)">
                                        <h3>Career Level</h3>
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="accordion-widget-content show">
                                        <li>
                                            <label class="single-check">
                                                Manager
                                                <input type="radio" checked="checked" name="radio-4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Officer
                                                <input type="radio" checked="checked" name="radio-4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Student
                                                <input type="radio" checked="checked" name="radio-4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Executive
                                                <input type="radio" checked="checked" name="radio-4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Others
                                                <input type="radio" checked="checked" name="radio-4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="job-listing-widget">
                            <ul class="accordion-widget">
                                <li class="accordion-item">
                                    <a class="accordion-widget-title active" href="javascript:void(0)">
                                        <h3>Experience</h3>
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="accordion-widget-content show">
                                        <li>
                                            <label class="single-check">
                                                Fresh
                                                <input type="radio" checked="checked" name="radio-5">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                1 Year
                                                <input type="radio" checked="checked" name="radio-5">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                3 Year
                                                <input type="radio" checked="checked" name="radio-5">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                5 Year
                                                <input type="radio" checked="checked" name="radio-5">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                7 Year
                                                <input type="radio" checked="checked" name="radio-5">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="job-listing-widget">
                            <ul class="accordion-widget">
                                <li class="accordion-item">
                                    <a class="accordion-widget-title active" href="javascript:void(0)">
                                        <h3>Qualifications</h3>
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="accordion-widget-content show">
                                        <li>
                                            <label class="single-check">
                                                Certificate
                                                <input type="radio" checked="checked" name="radio-6">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Diploma
                                                <input type="radio" checked="checked" name="radio-6">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Bachelor Degree
                                                <input type="radio" checked="checked" name="radio-6">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Master’s Degree
                                                <input type="radio" checked="checked" name="radio-6">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Associate
                                                <input type="radio" checked="checked" name="radio-6">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="job-listing-widget">
                            <ul class="accordion-widget">
                                <li class="accordion-item">
                                    <a class="accordion-widget-title active" href="javascript:void(0)">
                                        <h3>Gender</h3>
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="accordion-widget-content show">
                                        <li>
                                            <label class="single-check">
                                                Male
                                                <input type="radio" checked="checked" name="radio-7">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="single-check">
                                                Female
                                                <input type="radio" checked="checked" name="radio-7">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
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
