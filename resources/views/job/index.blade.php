@extends('layouts.app')

@push('styles')

@endpush

@section('content')

    @include('partials.breadcrumb', ['title' => __('Job Listing')])

    <section class="job-listing-area ptb-100">
        <div class="container">
            <div class="row">

                @livewire('list-job-post')

                @livewire('job-filter')

            </div>
        </div>
    </section>

    @include('partials.newsletter')

@endsection

@push('scripts')

@endpush
