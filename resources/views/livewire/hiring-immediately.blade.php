@if($immediateJobPosts && $immediateJobPosts->count())
<div class="col-lg-4">
    <div class="hiring-list">
        <h3>{{__('Hiring Immediately')}}</h3>
        <div class="hiring-list-slider owl-carousel owl-theme">
            @foreach($immediateJobPosts->chunk(3) as $chunk)
            <ul>
                @foreach($chunk as $jobPost)
                <li wire:key="{{ $jobPost->id }}">
                    <a href="{{ route('job.show', ['jobPost' => $jobPost]) }}" class="hiring-img">
                        <img src="{{ $jobPost->company->logo() }}" alt="{{ $jobPost->company->title }}">
                    </a>
                    <a href="{{ route('job.show', ['jobPost' => $jobPost]) }}" class="link">{{ $jobPost->title }}</a>
                    <span>{{ $jobPost->company->title }}</span>
                </li>
                @endforeach
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endif
