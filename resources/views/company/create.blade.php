@extends('layouts.app')

@push('styles')

@endpush

@section('content')

    @include('partials.breadcrumb', ['title' => __('Create a company')])

    <section class="job-information-area ptb-100">
        <div class="container">
            <div class="job-information">

                @include('partials.errors')

                @include('partials.notification')

                <h3>{{__('Job Information')}}</h3>

                @include('company.partials.create-form')

            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush
