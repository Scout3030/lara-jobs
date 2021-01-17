<section wire:init="filteredJobPosts" class="hot-jobs-area hot-jobs-area-three pb-100">
    <div class="container">
        <div class="row">
            @if($jobPosts && $jobPosts->count())
            <div class="col-lg-8">
                <div class="section-title">
                    <span>{{__('Hot Jobs')}}</span>
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

                @foreach($jobPosts as $jobPost)
                <div class="hot-jobs-list" wire:key="{{ $jobPost->id }}">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <a href="job-details.html" class="hot-jobs-img">
                                <img src="assets\images\hot-jobs\hot-jobs-2.png" alt="Image">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="hot-jobs-content">
                                <h3><a href="job-details.html">{{ $jobPost->title }}</a></h3>
                                <span class="sub-title">{{ $jobPost->company->title }}</span>
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
                @endforeach

                {{ $jobPosts->links() }}

            </div>

            @endif

            @include('home.partials.hiring-inmediately')

        </div>
    </div>
</section>
