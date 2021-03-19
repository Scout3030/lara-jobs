@extends('layouts.app')

@section('content')

    @include('home.partials.banner')

    <section class="hot-jobs-area hot-jobs-area-three pb-100 pt-5">
        <div class="container">
            <div class="row">
                @livewire('list-job-post')
                @livewire('hiring-immediately')
            </div>
        </div>
    </section>

    @include('home.partials.companies')

@endsection
