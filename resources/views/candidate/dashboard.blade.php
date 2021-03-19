@extends('layouts.candidate-dashboard')

@push('styles')

@endpush

@section('breadcrumbs')
    @include('partials.breadcrumb', ['title' => 'Dashboard'])
@endsection

@section('content')

    <div class="col-lg-8">
        <div class="candidates-dashboard-content">
            <div class="candidates-dashboard">
                <h3>{{__('Candidate Dashboard')}}</h3>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-work-view">
                            <span>{{ $appliedJobs->count() }}</span>
                            <h3>{{__('Total Applications')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent-activities">
                <h3>{{__('Recent Activities')}}</h3>
                <ul class="activities">
                    @foreach($viewedJobs as $viewedJob)
                    <li>
                        {{__(':company has reviewed your CV', ['company' => $viewedJob->company->title])}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
