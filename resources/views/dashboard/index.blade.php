@extends('layouts.app')

@push('styles')

@endpush

@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Candidates</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>Candidates Dashboard</li>
                    <li class="active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="candidates-dashboard-area ptb-100">
        <div class="container">
            <div class="row">
                @include('dashboard.partials.navigation')
                <div class="col-lg-8">
                    <div class="candidates-dashboard-content">
                        <div class="candidates-dashboard">
                            <h3>{{__('Candidate Dashboard')}}</h3>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-work-view">
                                        <span>24</span>
                                        <h3>Active Job Listings</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-work-view">
                                        <span>362</span>
                                        <h3>Total Job Views</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-work-view">
                                        <span>{{ auth()->user()->candidate->jobPosts->count() }}</span>
                                        <h3>{{__('Total Applications')}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-activities">
                            <h3>{{__('Recent Activities')}}</h3>
                            <ul class="activities">
                                <li>
                                    Your Job UX/UI Designer Has Been Approved!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Timothy Demers Has Sent You Private Message!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Your Job Listing Web Designer is Expiring!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Someone Bookmarked Your Project Manager Job!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    You Have New Application for Research Assistant!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Terrance Hartman Left a Review Your Job!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Your Job Content Writing Has Been Approved!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Someone Bookmarked Your Support Executive Job!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Anderson Lara Has Sent You Private Message!
                                    <a href="#"><i class="bx bx-x"></i></a>
                                </li>
                                <li>
                                    Donal Henri Smith Left a Review Your Job!
                                    <a href="#"><i class="bx bx-x"></i></a>
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

@endpush
