@extends('layouts.app')

@push('styles')

@endpush

@section('breadcrumbs')
{{--    {{ Breadcrumbs::render('home') }}--}}
@endsection

@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Job Details</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">{{__('Job Details')}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="job-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="hot-jobs-img">
                                    <img src="{{$jobPost->company->user->pathAttachment()}}" alt="{{$jobPost->company->title}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3>{{$jobPost->title}}</h3>
                                    <span class="sub-title">{{$jobPost->company->title}}</span>
                                    <ul>
                                        <li><span>Vacancy:</span> 01</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <a href="#" class="default-btn">Apply Now</a>
                                    <p><span>Deadline: </span>Dec 30, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-details-content">
                        <h3>{{__('Job Description')}}</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur</p>
                        <h4>Responsibilities:</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi aspernatur modi doloribus dolorem quidem! Neque placeat numquam vel magni ipsam, similique eligendi sunt laudantium, nihil alias soluta eos in Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nam eveniet quasi.</p>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                        </ul>
                        <h4>Qualifications:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                        </ul>
                        <h4>Competencies:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, </li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua.</li>
                        </ul>
                        <h4>Experience Requirements:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
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
