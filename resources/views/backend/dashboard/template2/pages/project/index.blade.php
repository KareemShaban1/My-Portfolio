@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">{{__('Projects') }}</h2>
    <button class="btn btn-success mb-3" id="addNew">{{ __('Add Project') }}</button>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="project-table" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Main Image')}}</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Client')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.project.modal')


@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#project-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('projects') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'main_image',
                    name: 'main_image'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'client',
                    name: 'client'
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false
                }
            ],
            order: [
                [0, 'desc']
            ],
            buttons: [{
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
                {
                    extend: 'excel',
                    text: 'Excel',
                    title: 'Areas Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
            ],
            dom: '<"d-flex justify-content-between align-items-center mb-3"lfB>rtip',
            pageLength: 10,
            responsive: true,
            language: languages[language], // Apply language dynamically
            "drawCallback": function() {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }

        });

        // Open Create Modal
        $('#addNew').click(function() {
            $('#projectForm')[0].reset();
            $('#projectModal').modal('show');
        });

        // Submit Create/Update Form
        $('#projectForm').submit(function(e) {
            e.preventDefault();

            let formData = new FormData(this); // Create FormData object

            let url = $('#project_id').val() ?
                "{{ route('projects.update', '') }}/" + $('#project_id').val() :
                "{{ route('projects.store') }}";

            let method = $('#project_id').val() ? 'PUT' : 'POST';

            // Laravel requires _method for PUT requests
            if (method === 'PUT') {
                formData.append('_method', 'PUT');
            }

            $.ajax({
                url: url,
                type: 'POST', // Always use POST for FormData
                data: formData,
                processData: false, // Don't process FormData
                contentType: false, // Don't set content type
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}" // Include CSRF token in headers
                },
                success: function(response) {
                    $('#projectModal').modal('hide');
                    table.ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message
                    });
                },
                error: function(xhr) {
                    alert('Error: ' + xhr.responseJSON.error);
                }
            });
        });


        // Open Edit Modal
        $(document).on('click', '.edit', function() {
            let id = $(this).data('id');
            $.get("{{ route('projects') }}/" + id + "/edit", function(data) {
                $('#project_id').val(data.id);
                $('#title').val(data.title);
                $('#client').val(data.client);
                $('#github_link').val(data.github_link);
                $('#date').val(data.date);
                $('#live_link').val(data.live_link);
                $('#info').val(data.info);
                $('#projectModal').modal('show');
            });
        });

        // Delete Record
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: "{{ route('projects') }}/" + id,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        table.ajax.reload();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message
                        });
                    }
                });
            }
        });
    });
</script>
@endpush