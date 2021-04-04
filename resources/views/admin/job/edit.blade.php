@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"/>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/jQuery-RichText/src/richtext.min.css') }}">
@endpush

@section('content')

    @include('partials.breadcrumb', ['title' => __('Edit Job')])

    <section class="job-information-area ptb-100">
        <div class="container">
            <div class="job-information">

                @include('partials.errors')

                @include('partials.notification')

                <h3>{{__('Job Information')}}</h3>

                <livewire:job-post-edit :jobPost="$jobPost"/>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{  asset('assets/jQuery-RichText/src/jquery.richtext.min.js') }}"></script>
    <script>
        // wysiwyg found on https://www.jqueryscript.net/text/wysiwyg-editor-bootstrap.html
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

            //     let params = 1;
            // select2Department.select2({
            //     ajax: {
            //         url: function (params) {
            //             return '/some/url/' + params.term;
            //         }
            //     }
            // });

            $('textarea').richText({
                // text formatting
                bold: true,
                italic: true,
                underline: true,

                // text alignment
                leftAlign: true,
                centerAlign: true,
                rightAlign: true,
                justify: true,

                // lists
                ol: true,
                ul: true,

                // title
                heading: true,

                // fonts
                fonts: true,
                fontList: [
                    "muli"
                ],
                fontColor: true,
                fontSize: true,

                // uploads
                imageUpload: true,
                fileUpload: true,

                // media
                // <a href="https://www.jqueryscript.net/tags.php?/video/">video</a>Embed: true,

                // link
                urls: true,

                // tables
                table: true,

                // code
                removeStyles: true,
                code: true,

                // colors
                colors: [],

                // dropdowns
                fileHTML: '',
                imageHTML: '',

                // translations
                translations: {
                    'title': 'Title',
                    'white': 'White',
                    'black': 'Black',
                    'brown': 'Brown',
                    'beige': 'Beige',
                    'darkBlue': 'Dark Blue',
                    'blue': 'Blue',
                    'lightBlue': 'Light Blue',
                    'darkRed': 'Dark Red',
                    'red': 'Red',
                    'darkGreen': 'Dark Green',
                    'green': 'Green',
                    'purple': 'Purple',
                    'darkTurquois': 'Dark Turquois',
                    'turquois': 'Turquois',
                    'darkOrange': 'Dark Orange',
                    'orange': 'Orange',
                    'yellow': 'Yellow',
                    'imageURL': 'Image URL',
                    'fileURL': 'File URL',
                    'linkText': 'Link text',
                    'url': 'URL',
                    'size': 'Size',
                    'responsive': '<a href="https://www.jqueryscript.net/tags.php?/Responsive/">Responsive</a>',
                    'text': 'Text',
                    'openIn': 'Open in',
                    'sameTab': 'Same tab',
                    'newTab': 'New tab',
                    'align': 'Align',
                    'left': 'Left',
                    'justify': 'Justify',
                    'center': 'Center',
                    'right': 'Right',
                    'rows': 'Rows',
                    'columns': 'Columns',
                    'add': 'Add',
                    'pleaseEnterURL': 'Please enter an URL',
                    'videoURLnotSupported': 'Video URL not supported',
                    'pleaseSelectImage': 'Please select an image',
                    'pleaseSelectFile': 'Please select a file',
                    'bold': 'Bold',
                    'italic': 'Italic',
                    'underline': 'Underline',
                    'alignLeft': 'Align left',
                    'alignCenter': 'Align centered',
                    'alignRight': 'Align right',
                    'addOrderedList': 'Add ordered list',
                    'addUnorderedList': 'Add unordered list',
                    'addHeading': 'Add Heading/title',
                    'addFont': 'Add font',
                    'addFontColor': 'Add font color',
                    'addFontSize': 'Add font size',
                    'addImage': 'Add image',
                    'addVideo': 'Add video',
                    'addFile': 'Add file',
                    'addURL': 'Add URL',
                    'addTable': 'Add table',
                    'removeStyles': 'Remove styles',
                    'code': 'Show HTML code',
                    'undo': 'Undo',
                    'redo': 'Redo',
                    'close': 'Close'
                },

                // privacy
                youtubeCookies: false,

                // dev settings
                useSingleQuotes: false,
                height: 0,
                heightPercentage: 75,
                id: "",
                class: "",
                useParagraph: false,
                maxlength: 0,

                // callback function after init
                callback: undefined
            });
        });
    </script>
@endpush
