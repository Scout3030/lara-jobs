@extends('layouts.candidate-dashboard')

@push('styles')

@endpush

@section('content')

    <div class="col-lg-8">
        <div class="candidates-profile-content">
            <form class="profile-info" method="POST" action="{{ route('home.index') }}">
                @csrf
                <h3>{{__('Basic Info')}}</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="name">{{__('First Name')}}</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ auth()->user()->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="last_name">{{__('Last Name')}}</label>
                            <input id="last_name" class="form-control" type="text" name="last_name" value="{{ old('last_name') ?? auth()->user()->candidate->last_name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="email">{{__('Email')}}</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="phone_number">{{__('Phone Number')}}</label>
                            <input id="phone_number" class="form-control" type="text" name="phone_number" value="{{ old('phone_number') ?? auth()->user()->phone_number }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" class="form-control" type="text" name="title" value="{{ old('title') ?? auth()->user()->candidate->title }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="language">Language</label>
                            <select id="language">
                                <option value="1">English</option>
                                <option value="2">العربيّة</option>
                                <option value="2">Flag Germany</option>
                                <option value="3">Flag Português</option>
                                <option value="4">简体中文</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="resume">{{ __('Resume') }}</label>
                            <textarea id="resume" name="resume" class="form-control" rows="6">{{ old('title') ?? auth()->user()->candidate->resume }}</textarea>
                        </div>
                    </div>
                </div>
                <h3>Address</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="country">{{__('Country')}}</label>
                            <select id="country" name="country">
                                @foreach(\App\Models\Country::orderBy('name', 'asc')->get() as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="region">{{__('Region')}}</label>
                            <select id="region" name="region">
                                @foreach(\App\Models\Country::orderBy('name', 'asc')->get() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="city">{{__('City')}}</label>
                            <select id="city" name="city">
                                @foreach(\App\Models\Country::orderBy('name', 'asc')->get() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="post_code">{{__('Post Code')}}</label>
                            <input id="post_code" class="form-control" type="text" name="post_code" value="{{ old('address') ?? auth()->user()->post_code }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="address">{{__('Address')}}</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{ old('address') ?? auth()->user()->address }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="default-btn">{{__('Save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
