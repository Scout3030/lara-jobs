@extends('layouts.app')

@push('styles')

@endpush

@push('facebook-sdk')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v10.0&appId=696842661211386&autoLogAppEvents=1" nonce="Lldmrl2o"></script>
@endpush

@section('content')

    @include('partials.breadcrumb', ['title' => __('Job Details')])

    <section class="job-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="hot-jobs-img">
                                    <img src="{{$jobPost->company->user->profile_photo_url}}" alt="{{$jobPost->company->title}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3>{{$jobPost->title}}</h3>
                                    <span class="sub-title">{{$jobPost->company->title}}</span>
                                    <ul>
                                        <li><span>{{__('Vacancy')}}:</span> 01</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="#" class="default-btn">{{__('Apply')}}</a>
                                    <p><span>{{__('Deadline')}}: </span>{{$jobPost->deadline->format('d-m-Y')}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="job-details-content">
                        <h3>{{__('Job Description')}}</h3>
                        <p>{{ $jobPost->description }}</p>
                        <h4>{{__('Competencies')}}:</h4>
                        <ul>
                            @foreach($jobPost->technologies as $technology)
                            <li>{{ $technology->name }}</li>
                            @endforeach
                        </ul>
                        <h4>{{__('Experience')}}:</h4>
                        <ul>
                            @foreach($jobPost->experience as $key => $experience)
                            <li>{{$experience}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @include('job.partials.right-sidebar')
            </div>
        </div>
    </section>

    @include('partials.newsletter')

@endsection

@push('scripts')

@endpush
