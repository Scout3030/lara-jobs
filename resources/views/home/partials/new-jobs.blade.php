@livewire('list-job-post')

<section class="hot-jobs-area hot-jobs-area-three pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <span>Hot Jobs</span>
                    <h2>{{__('New & Random Jobs')}}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <select>
                            <option value="1">Full Time</option>
                            <option value="2">Part Time</option>
                            <option value="3">Night</option>
                            <option value="4">Day</option>
                            <option value="5">Evening</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div class="show-page">
                            <p>Show Per Page</p>
                            <select>
                                <option value="1">05</option>
                                <option value="2">07</option>
                                <option value="3">10</option>
                                <option value="4">15</option>
                                <option value="5">18</option>
                            </select>
                        </div>
                    </div>
                </div>
                @forelse($jobPosts as $jobPost)
                    @include('job.partials.post-card', ['jobPost' => $jobPost])
                @empty

                @endforelse
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

                {{$jobPosts->links()}}

            </div>
            <div class="col-lg-4">
                <div class="hot-jobs-sidebar">
                    <div class="hot-job-sidebar">
                        <div class="hot-job-sidebar-content quick-link">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">Employer List </a>
                                </li>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">New Jobs (24 hrs)</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">Deadline Tomorrow </a>
                                </li>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">Urgent Jobs</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">Customer Service</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">Contractual Jobs </a>
                                </li>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">Part-Time Jobs</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevrons-right"></i>
                                    <a href="#">Now Hiring</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hot-job-sidebar">
                        <img src="assets\images\hot-jobs\hot-jobs-sidebar-img.jpg" alt="Image">
                        <div class="hot-job-sidebar-content">
                            <h3>The Benefits of Using Jobs</h3>
                            <ul>
                                <li>
                                    <span>1</span>
                                    <a href="#">Helpful Customer Support</a>
                                </li>
                                <li>
                                    <span>2</span>
                                    <a href="#">Access To Career Coaching</a>
                                </li>
                                <li>
                                    <span>3</span>
                                    <a href="#">Skills Courses</a>
                                </li>
                                <li>
                                    <span>4</span>
                                    <a href="#">Top-notch Friendly</a>
                                </li>
                                <li>
                                    <span>5</span>
                                    <a href="#">Access Exclusive Research</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
