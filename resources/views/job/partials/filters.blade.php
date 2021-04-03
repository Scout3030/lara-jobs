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
                                <input type="radio" @if(request()->jobType == 0 || request()->jobType == null) checked="checked" @endif name="job-type" data-job-type="0">
                                <span class="checkmark"></span>
                                <span class="count">({{ \App\Models\JobPost::get()->count() }})</span>
                            </label>
                        </li>
                        @foreach(\App\Models\JobType::get() as $jobType)
                            <li>
                                <label class="single-check">
                                    {{__($jobType->name)}}
                                    <input type="radio" @if(request()->jobType == $jobType->id) checked="checked" @endif name="job-type" data-job-type="{{ $jobType->id }}">
                                    <span class="checkmark"></span>
                                    <span class="count">({{ $jobType->jobPosts->count() }})</span>
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
                                <input type="radio" checked="checked" name="date" data-date="0">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 24 hours')}}
                                <input type="radio" name="date" data-date="1">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 7 days')}}
                                <input type="radio" name="date" data-date="7">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 14 days')}}
                                <input type="radio" name="date" data-date="14">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="single-check">
                                {{__('Last 30 days')}}
                                <input type="radio" name="date" data-date="30">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $("[name='job-type']").click(function(){
            window.location = `/job/list?jobType=${$(this).data('job-type')}`
        })

        $("[name='date']").click(function(){
            window.location = `/job/list?date=${$(this).data('date')}`
        })
    </script>
@endpush