<div class="col-lg-4">
    <div class="job-details-sidebar">
        <div class="job-widget">
            <h3>{{__('Share This Job')}}</h3>
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
                    <span>: {{ $jobPost->province->name }},
                        {{ $jobPost->province->department->name }},
                        {{ $jobPost->province->department->country->name }}
                    </span>
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
