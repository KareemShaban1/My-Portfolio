@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-3">

        <h2 class="mb-4">{{ __('Template Information') }}</h2>
        <button class="btn btn-success mb-3" id="addNew">{{ __('Add Template Information') }}</button>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="informationTable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Key')}}</th>
                                <!-- <th>{{__('Value')}}</th> -->
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.templateInformation.modal')

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#informationTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('templateInformation') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'key',
                    name: 'key'
                },
                // {
                //     data: 'value',
                //     name: 'value'
                // },
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
            $('#informationForm')[0].reset();
            $('#informationModal').modal('show');
        });

        // Submit Create/Update Form
        $('#informationForm').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            let url = $('#information_id').val() ? "{{ route('templateInformation.update', '') }}/" + $('#information_id').val() : "{{ route('templateInformation.store') }}";
            let method = $('#information_id').val() ? 'PUT' : 'POST';

            $.ajax({
                url: url,
                type: method,
                data: formData,
                success: function(response) {
                    $('#informationModal').modal('hide');
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
            $.get("{{ route('templateInformation') }}/" + id + "/edit", function(data) {
                $('#information_id').val(data.id);
                $('#key').val(data.key);
                $('#value').val(data.value);
                $('#informationModal').modal('show');
            });
        });

        // Delete Record
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: "{{ route('templateInformation') }}/" + id,
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