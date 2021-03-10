{{$appliedJobPosts}}
{{--@if($appliedJobPosts && $appliedJobPosts->count())--}}
<div class="col-lg-8">
    <div class="candidates-applied-jobs-content">
        <h3>Applied Jobs</h3>
        @foreach($appliedJobPosts as $appliedJobPost)
        <div class="hot-jobs-list" wire:key="{{ $appliedJobPost->id }}">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <a href="job-details.html" class="hot-jobs-img">
                        <img src="assets\images\hot-jobs\hot-jobs-1.png" alt="Image">
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="hot-jobs-content">
                        <h3><a href="job-details">Finance & Accounts</a></h3>
                        <span class="sub-title">Finix loans & funding agency</span>
                        <ul>
                            <li><span>Education: </span>BBA / M.A.</li>
                            <li><span>Deadline: </span>Dec 08, 2020</li>
                            <li><span>Location: </span>New York</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="default-btn">Download CV</a>
                    <a href="#" class="remove">
                        <i class="bx bx-x"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

{{--        {{ $appliedJobPosts->links() }}--}}
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
</div>
{{--@endif--}}
