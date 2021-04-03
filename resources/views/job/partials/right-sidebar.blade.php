<div class="col-lg-4">
    <div class="job-details-sidebar">
        <div class="job-widget">
            <h3>{{__('Share This Job')}}</h3>
            <ul class="social-icon">
                <li class="fb-share-button" data-href="{{ route('job.show', ['jobPost' => $jobPost]) }}" data-layout="button_count" data-size="small">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('job.show', ['jobPost' => $jobPost]) }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <i class="bx bxl-facebook"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="job-widget">
            <h3>Job Overview</h3>
            <ul class="overview">
                <li>
                    {{__('Published On')}}
                    <span>: {{$jobPost->created_at->format('d-m-Y')}}</span>
                </li>
                <li>
                    {{__('Vacancy')}}
                    <span>: 01</span>
                </li>
                <li>
                    {{__('Job Type')}}
                    <span>: {{ $jobPost->jobType->name }}</span>
                </li>
                <li>
                    {{__('Experience')}}
                    <span>: 3 Year(s)</span>
                </li>
                <li>
                    {{__('Job Location')}}
                    <span>: {{ $jobPost->location }}</span>
                </li>
                <li>
                    {{__('Salary')}}
                    <span>: $700.00</span>
                </li>
                <li>
                    {{__('Application Deu')}}
                    <span>: {{ $jobPost->deadline->format('d.m.Y') }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
