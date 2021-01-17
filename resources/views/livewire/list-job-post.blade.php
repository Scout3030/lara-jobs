@if($jobPosts && $jobPosts->count())
<div class="col-lg-8" wire:init="filteredJobPosts">
    <div class="section-title">
        <span>{{__('Hot Jobs')}}</span>
        <h2>{{__('New & Random Jobs')}}</h2>
    </div>
{{--    <div class="row">--}}
{{--        <div class="col-lg-6">--}}
{{--            <select>--}}
{{--                <option value="1">Full Time</option>--}}
{{--                <option value="2">Part Time</option>--}}
{{--                <option value="3">Night</option>--}}
{{--                <option value="4">Day</option>--}}
{{--                <option value="5">Evening</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="show-page">--}}
{{--                <p>Show Per Page</p>--}}
{{--                <select>--}}
{{--                    <option value="1">05</option>--}}
{{--                    <option value="2">07</option>--}}
{{--                    <option value="3">10</option>--}}
{{--                    <option value="4">15</option>--}}
{{--                    <option value="5">18</option>--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @foreach($jobPosts as $jobPost)
    <div class="hot-jobs-list" wire:key="{{ $jobPost->id }}">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <a href="{{ route('job.show', ['jobPost' => $jobPost]) }}" class="hot-jobs-img">
                    <img src="{{ $jobPost->company->user->profile_photo_url }}" alt="Image">
                </a>
            </div>
            <div class="col-lg-6">
                <div class="hot-jobs-content">
                    <h3><a href="{{ route('job.show', ['jobPost' => $jobPost]) }}">{{ $jobPost->title }}</a></h3>
                    <span class="sub-title">{{ $jobPost->company->title }}</span>
                    <ul>
                        <li><span>{{__('Education')}}:</span> BBA / M.A.</li>
                        <li><span>{{__('Experience')}}: </span>At Least 2 Year(s)</li>
                        <li><span>{{__('Location')}}: </span>Alaska</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hot-jobs-btn">
                    <a href="{{ route('job.show', ['jobPost' => $jobPost]) }}" class="default-btn">Browse Job</a>
                    <p><span>{{__('Deadline')}}: </span>{{ $jobPost->deadline->format('d-m-Y') }}</p>
                </div>
            </div>
        </div>
        <span class="{{ $jobPost->custom_tag['class'] }}">{{ $jobPost->custom_tag['text'] }}</span>
    </div>
    @endforeach

    {{ $jobPosts->links() }}

</div>
@endif



