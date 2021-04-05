@extends('layouts.app')

@push('styles')

@endpush

@section('content')

    @include('partials.breadcrumb', ['title' => __(':txt a company', ['txt' => $txt])])

    <section class="job-information-area ptb-100">
        <div class="container">
            <div class="job-information">

                @include('partials.errors')

                @include('partials.notification')

                <h3>{{__('Company Information')}}</h3>

                <div>
                    <form method="post" action="{{ $company->id ? route('admin.company.update', ['company' => $company]) : route('admin.company.store') }}" enctype="multipart/form-data">
                        @if($company->id)
                            @method('put')
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="title">{{__('Company title')}}*</label>
                                    <input id="title" class="form-control" type="text" name="title" autocomplete="off" required value="{{ $company->id ? $company->title : old('title') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="website_url">{{__('Website')}}</label>
                                    <input id="website_url" class="form-control" type="text" name="website_url" autocomplete="off" value="{{ $company->id ? $company->website_url : old('website_url') }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="choose-img">
                                    <label for="logo">{{ __('Select image') }}:</label>
                                    <input type="file" id="logo" name="logo" accept="image/*" @if(!$company->id) required @endif>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="biography">{{__('Biography')}}*</label>
                                    <textarea id="biography" name="biography" class="form-control" rows="5">{{ $company->id ? $company->biography : old('biography') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="default-btn">
                                    {{__($txt)}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush
