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
                                    <img src="{{$jobPost->company->logo()}}" alt="{{$jobPost->company->title}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3>{{$jobPost->title}}</h3>
                                    <span class="sub-title">{{$jobPost->company->title}}</span>
                                    <ul>
                                        <li><span>{{__('Vacancies')}}:</span> {{ $jobPost->vacancies }}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="hot-jobs-btn">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="default-btn" data-toggle="modal" data-target="#applyModal">{{__('Apply')}}</button>
                                    <p><span>{{__('Deadline')}}: </span>{{$jobPost->deadline->format('d-m-Y')}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="job-details-content">
                        <h3>{{__('Job Description')}}</h3>
                        <p>{!! $jobPost->description !!}</p>
                        <h4>{{__('Competences')}}:</h4>
                        <ul>
                            @foreach($jobPost->technologies as $technology)
                            <li>{{ $technology->name }}</li>
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

@push('modals')
    <!-- Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('How to apply?')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $jobPost->how_to_apply }}
                </div>
            </div>
        </div>
    </div>
@endpush
