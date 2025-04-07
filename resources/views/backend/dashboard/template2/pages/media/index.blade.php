@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">{{__('Portfolio Images') }}</h2>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="media-table" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Image Name')}}</th>
                                <th>{{__('Image')}}</th>
                                <th>{{__('Type')}}</th>
                                <th>{{__('Collection Name')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.media.modal')


@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#media-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('media') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'file_name',
                    name: 'file_name'
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'collection_name',
                    name: 'collection_name'
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



        // 📝 Open Edit Modal
        $(document).on('click', '.edit', function() {
            let id = $(this).data('id');

            $.get("{{ route('media') }}/" + id + "/edit", function(data) {
                $('#media_id').val(data.id);
                $('#media-preview').attr('src', data.image_url);
                $('#mediaModal').modal('show');
            });
        });

        // 📝 Handle Update
        $('#media-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('image', $('#image')[0].files[0]);

            let id = $('#media_id').val();

            $.ajax({
                url: "{{ route('media') }}/" + id,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#mediaModal').modal('hide');
                    table.ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.success
                    });
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to update media'
                    });
                }
            });
        });

        // 🗑️ Handle Delete
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('media') }}/" + id,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            table.ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response.success
                            });
                        }
                    });
                }
            });
        });
    });
</script>
@endpush