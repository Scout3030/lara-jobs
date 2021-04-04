@extends('layouts.app')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/wysiwyg-editor-bootstrap/dist/css/wysiwyg.css') }}" rel="stylesheet" />
@endpush

@section('content')

    @include('partials.breadcrumb', ['title' => __('Post a Job')])

    <section class="job-information-area ptb-100">
        <div class="container">
            <div class="job-information">

                @include('partials.errors')

                @include('partials.notification')

                <h3>{{__('Job Information')}}</h3>

                <livewire:post-form :company="$company"/>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/wysiwyg-editor-bootstrap/dist/js/wysiwyg.js') }}"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.country_select2').select2();
            $('.department_select2').select2();
            $('.province_select2').select2();

            $('#description').wysiwyg({
                toolbar: [
                    ['mode'],
                    ['operations', ['undo', 'rendo', 'cut', 'copy', 'paste']],
                    ['styles'],
                    ['fonts', ['select', 'size']],
                    ['text', ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'font-color', 'bg-color']],
                    ['align', ['left', 'center', 'right', 'justify']],
                    ['lists', ['unordered', 'ordered', 'indent', 'outdent']],
                    ['components', ['table', /*'chart'*/]],
                    ['intervals', ['line-height', 'letter-spacing']],
                    ['insert', ['emoji', 'link', 'image', '<a href="https://www.jqueryscript.net/tags.php?/video/">video</a>', 'symbol', /*'bookmark'*/]],
                    ['special', ['print', 'unformat', 'visual', 'clean']],
                    /*['fullscreen'],*/
                ],
                fontSizeDefault: '9px',
                fontFamilies: ['muli', 'Open Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times', 'Times New Roman', 'Verdana'],
                fontFamilyDefault: 'muli',
            });

            
        });
    </script>
@endpush
