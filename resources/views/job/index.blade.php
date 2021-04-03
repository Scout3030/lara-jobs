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
            </div>
        </div>
    </section>

    @include('partials.newsletter')

@endsection

@push('scripts')
push scripts
@endpush
