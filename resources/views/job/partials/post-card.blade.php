<div class="hot-jobs-list">
    <div class="row align-items-center">
        <div class="col-lg-2">
            <a href="job-details.html" class="hot-jobs-img">
                <img src="assets\images\hot-jobs\hot-jobs-1.png" alt="Image">
            </a>
        </div>
        <div class="col-lg-6">
            <div class="hot-jobs-content">
                <h3><a href="job-details.html">{{$jobPost->title}}</a></h3>
                <span class="sub-title">{{$jobPost->company->title}}</span>
                <ul>
                    <li><span>Education:</span> BBA / M.A.</li>
                    <li><span>Experience: </span>At Least 1 Year(s)</li>
                    <li><span>Location: </span>New York</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="hot-jobs-btn">
                <a href="{{ route('job.show', ['jobPost' => $jobPost ]) }}" class="default-btn">{{__('Browse Job')}}</a>
                <p><span>Deadline: </span>Dec 30, 2020</p>
            </div>
        </div>
    </div>
    <span class="featured">Featured</span>
</div>
