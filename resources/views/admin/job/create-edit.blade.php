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
            font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Muli=muli; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
            content_style: "body { font-size: 16px; font-family: muli; }"
        });
        tinymce.init({
            selector: '#how_to_apply',
            menubar: true,
            plugins: 'link image code',
            font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Muli=muli; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
            content_style: "body { font-size: 16px; font-family: muli; }"
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
    <script>
        $(document).ready(function() {
            let select2Country = $('.country_select2')
            let select2Department = $('.department_select2')
            let select2Province = $('.province_select2')
            select2Country.select2();
            select2Department.select2();
            select2Province.select2();
            @if(old('country_id') || ($jobPost && $jobPost->location['country_id']))
            select2Country.val({{ old('country_id') ?? $jobPost->location['country_id'] }});
            select2Country.trigger('change');
            @endif
            @if(old('department_id') || ($jobPost && $jobPost->location['department_id']))
            select2Department.val({{ old('department_id') ?? $jobPost->location['department_id'] }});
            select2Department.trigger('change');
            @endif
            @if(old('province_id') || ($jobPost && $jobPost->location['province_id']))
            select2Department.val({{ old('province_id') ?? $jobPost->location['province_id'] }});
            select2Department.trigger('change');
            @endif
        });
    </script>
@endpush
