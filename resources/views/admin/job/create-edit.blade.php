@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"/>
    <!-- WYSIWYG found in https://www.tiny.cloud/docs/quick-start/-->
    <script src="https://cdn.tiny.cloud/1/w8btp6r9douagmmn8sv994rvyzcnbluaxcso721mncz3tlkk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            menubar: true,
            plugins: 'link image code',
        });
        tinymce.init({
            selector: '#how_to_apply',
            menubar: true,
            plugins: 'link image code',
        });
    </script>
@endpush

@section('content')

    @include('partials.breadcrumb', ['title' => __('Post a Job')])

    <section class="job-information-area ptb-100">
        <div class="container">
            <div class="job-information">

                @include('partials.errors')

                @include('partials.notification')

                <h3>{{__('Job Information')}}</h3>

                @if(@$company)
                    <livewire:job-post-create :company="$company"/>
                @endif

                @if(@$jobPost)
                    <livewire:job-post-edit :jobPost="$jobPost"/>
                @endif

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
