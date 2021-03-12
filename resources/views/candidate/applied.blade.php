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
                    <li class="active">Applied Jobs</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="candidates-applied-jobs-area ptb-100">
        <div class="container">
            <div class="row">
                @include('candidate.partials.navigation')
                @livewire('applied-job-posts')
            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush
