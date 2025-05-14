@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">{{__('Pages') }}</h2>
    <button class="btn btn-success mb-3" id="addNew">{{ __('Add Page') }}</button>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="page-table" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Main Image')}}</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Template')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.page.modal')


@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#page-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('pages') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'main_image',
                    name: 'main_image'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'template',
                    name: 'template'
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
            $('#pageForm')[0].reset();
            $('#pageModal').modal('show');
        });

        // Submit Create/Update Form
        $('#pageForm').submit(function(e) {
            e.preventDefault();

            var form = $(this);

            let formData = new FormData(this); // Create FormData object

            let url = $('#page_id').val() ?
                "{{ route('pages.update', '') }}/" + $('#page_id').val() :
                "{{ route('pages.store') }}";

            let method = $('#page_id').val() ? 'PUT' : 'POST';

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
                    $('#pageModal').modal('hide');
                    form[0].reset();
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
            $.get("{{ route('pages') }}/" + id + "/edit", function(data) {
                $('#page_id').val(data.id);
                $('#name').val(data.name);
                $('#meta_title').val(data.meta_title);
                $('#meta_description').val(data.meta_description);
                $('#meta_keywords').val(data.meta_keywords);
                $('#template_id').val(data.template_id).trigger('change');

                $('#infoRowsContainer').html('');
                data.information.forEach(function(info) {
                    $('#infoRowsContainer').append(`
                        <div class="row info-row mb-2">
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="info_keys[]" value="${info.key}">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="info_values[]" value="${info.value}">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger remove-row">
                                    <i class="mdi mdi-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    `);
                });



                $('#pageModal').modal('show');
            });
        });

        // Delete Record
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: "{{ route('pages') }}/" + id,
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