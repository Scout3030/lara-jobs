@extends('layouts.app')

@section('content')

    @include('home.partials.banner')

    @livewire('list-job-post')

    @include('home.partials.companies')

@endsection
