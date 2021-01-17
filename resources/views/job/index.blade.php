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
                <h2>Job Listing</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Job Listing</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="job-listing-area ptb-100">
        <div class="container">
            <div class="row">

                @livewire('list-job-post')

                @include('job.partials.filters')

            </div>
        </div>
    </section>


    <section class="subscribe-area subscribe-area-about-page">
        <div class="container">
            <div class="subscribe-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="subscribe-content">
                            <h2>Find Your Next Great Job Opportunity!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required="" autocomplete="off">
                            <button class="default-btn" type="submit">
                                <span>Subscribe</span>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                            <p>Join The Newsletter 10,000 Users Already!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

@push('scripts')

@endpush
