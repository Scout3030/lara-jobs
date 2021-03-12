@extends('layouts.app')

@push('styles')

@endpush

@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Post a Job</h2>
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}">
                            Home
                        </a>
                    </li>
                    <li class="active">Post a Job</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="job-information-area ptb-100">
        <div class="container">
            <div class="job-information">

                @include('partials.errors')

                @include('partials.notification')

                <h3>{{__('Job Information')}}</h3>
                <form method="post" action="{{ route('job.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{__('Job title')}}*</label>
                                <input class="form-control" type="text" name="title" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{__('Job Types')}}*</label>
                                <select name="job_type_id" required>
                                    @foreach(\App\Models\JobType::get() as $jobType)
                                    <option value="{{$jobType->id}}">{{$jobType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{__('Application Deadline')}}</label>
                                <div class="input-group date" id="datetimepicker">
                                    <input type="text" class="form-control" placeholder="12/11/2021" name="deadline" autocomplete="off">
                                    <span class="input-group-addon"></span>
                                    <i class="bx bx-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{__('Salary Currency')}}</label>
                                <select name="Salary">
                                    <option value="1">Default</option>
                                    <option value="2">20000 To 30000</option>
                                    <option value="3">40000 To 50000</option>
                                    <option value="4">60000 To 70000</option>
                                    <option value="5">80000 To 90000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{__('Job Description')}}*</label>
                                <textarea name="description" class="form-control" rows="5" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group checkboxs">
                                <input type="checkbox" id="chb2">
                                <p>
                                    {{__('By clicking checkbox, you agree to our ')}}
                                    <a href="terms-conditions.html">{{__('Terms & Conditions')}}</a> {{__('And')}}
                                    <a href="privacy-policy.html">{{__('Privacy Policy')}}.</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="default-btn" dusk="post-a-job-button">
                                {{__('Post a Job')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush
