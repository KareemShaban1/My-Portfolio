@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ __('Meta Data') }}</h2>
    <button class="btn btn-success mb-3" id="addNew">{{ __('Add Meta Data') }}</button>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="metaDataTable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Key')}}</th>
                                <th>{{__('Value')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.metaData.modal')

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#metaDataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('metaData') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'key',
                    name: 'key'
                },
                {
                    data: 'value',
                    name: 'value'
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
                // {
                //     extend: 'pdf', 
                //     text: 'PDF', 
                //     title: 'Areas Data', 
                //     exportOptions: {
                //         columns: [0, 1, 2, 3]
                //     }
                // },
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
            $('#metaDataForm')[0].reset();
            $('#metaDataModal').modal('show');
        });

        // Submit Create/Update Form
        $('#metaDataForm').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            let url = $('#metaData_id').val() ? "{{ route('metaData.update', '') }}/" + $('#metaData_id').val() : "{{ route('metaData.store') }}";
            let method = $('#metaData_id').val() ? 'PUT' : 'POST';

            $.ajax({
                url: url,
                type: method,
                data: formData,
                success: function(response) {
                    $('#metaDataModal').modal('hide');
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
            $.get("{{ route('metaData') }}/" + id + "/edit", function(data) {
                $('#metaData_id').val(data.id);
                $('#key').val(data.key);
                $('#value').val(data.value);
                $('#metaDataModal').modal('show');
            });
        });

        // Delete Record
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: "{{ route('metaData') }}/" + id,
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