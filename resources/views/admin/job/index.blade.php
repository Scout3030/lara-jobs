@extends('layouts.app')

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endpush

@section('content')

@include('partials.breadcrumb', ['title' => __('Companies list')])

<div class="col-lg-12">
    <div class="candidates-resume-content">
        <table id="job_tables" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#job_tables').DataTable({
            pageLength: 5,
            lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.job.datatable') }}',
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            columns: [
                {data: 'id', visible: true},
                {data: 'title'},
                {data: 'company.title'},
                {data: 'actions'}
            ]
        });
    } );
</script>
@endpush
