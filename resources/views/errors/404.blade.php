@extends('layouts.app')

@push('styles')

@endpush

@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>404 Error</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">404 Error</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <img src="{{asset('assets/images/404.jpg')}}" alt="Image">
                    <h3>{{__('Oops! Page Not Found')}}</h3>
                    <p>{{__('The page you were looking for could not be found')}}.</p>
                    <a href="{{ route('home.index') }}" class="default-btn two">
                        {{__('Return To Home Page')}}
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
