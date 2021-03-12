<div class="col-lg-4">
    <div class="job-listing-sidebar">
        <div class="job-listing-widget">
            <ul class="accordion-widget">
                <li class="accordion-item">
                    <a class="accordion-widget-title active" href="javascript:void(0)">
                        <h3>{{__('Job Type')}}</h3>
                        <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="accordion-widget-content show">
                        <li>
                            <label class="single-check">
                                {{__('All')}}
                                <input type="radio" checked="checked" name="radio-1" wire:click="filterPosts('jobPost', '0')">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        @foreach(\App\Models\JobType::get() as $jobType)
                        <li>
                            <label class="single-check">
                                {{__($jobType->name)}}
                                <input type="radio" name="radio-1" wire:click="filterPosts('jobPost', '{{$jobType->id}}')">
                                <span class="checkmark"></span>
                                <span class="count">(8954)</span>
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <div class="job-listing-widget">
            <ul class="accordion-widget">
                <li class="accordion-item">
                    <a class="accordion-widget-title active" href="javascript:void(0)">
                        <h3>{{__('Date Posted')}}</h3>
                        <i class="bx bx-chevron-down"></i>
                    </a>
                    <ul class="accordion-widget-content show">
                        <li>
                            <label class="single-check">
                                {{__('All')}}
                                <input type="radio" checked="checked" name="radio-2" wire:click="filterPosts('datePosted', '0')">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 24 hours')}}
                                <input type="radio" name="radio-2" wire:click="filterPosts('datePosted', '1')">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 7 days')}}
                                <input type="radio" name="radio-2" wire:click="filterPosts('datePosted', '7')">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 14 days')}}
                                <input type="radio" name="radio-2" wire:click="filterPosts('datePosted', '14')">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 30 days')}}
                                <input type="radio" name="radio-2" wire:click="filterPosts('datePosted', '3')0">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
