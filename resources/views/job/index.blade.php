@extends('layouts.app')

@section('content')

    @include('partials.breadcrumb', ['title' => __('Job Listing')])

    <section class="job-listing-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="section-title">
                        <span>{{__('Hot Jobs')}}</span>
                        <h2>{{__('New & Random Jobs')}}</h2>
                    </div>

                    @foreach($jobPosts as $jobPost)
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <a href="{{ route('job.show', ['jobPost' => $jobPost]) }}" class="hot-jobs-img">
                                    <img src="{{ $jobPost->company->logo() }}" alt="{{ $jobPost->company->title }}">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href="{{ route('job.show', ['jobPost' => $jobPost]) }}">{{ $jobPost->title }}</a></h3>
                                    <span class="sub-title">{{ $jobPost->company->title }}</span>
                                    <ul>
                                        <li><span>{{__('Experience')}}: </span>{{ __($jobPost->experience->name) }}</li>
                                        <li><span>{{__('Location')}}: </span>{{ $jobPost->customLocation() }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="{{ route('job.show', ['jobPost' => $jobPost]) }}" class="default-btn">{{ __('Browse Job') }}</a>
                                    <p><span>{{__('Deadline')}}: </span>{{ $jobPost->deadline->format('d-m-Y') }}</p>
                                </div>
                            </div>
                        </div>
                        <span class="{{ $jobPost->custom_tag['class'] }}">{{ $jobPost->custom_tag['text'] }}</span>
                    </div>
                    @endforeach

                    {{ $jobPosts->links() }}

                </div>

                @include('job.partials.filters')

            </div>
        </div>
    </section>

    @include('partials.newsletter')

@endsection
