@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ __('PDF') }}</h2>
    <button class="btn btn-success mb-3" id="addNew">{{ __('Add PDF') }}</button>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="pdfTable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.pdf.modal')

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#pdfTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('pdfs') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
              
                {
                    data: 'name',
                    name: 'name'
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
            $('#pdfForm')[0].reset();
            $('#pdfModal').modal('show');
        });

        // Submit Create/Update Form
        $('#pdfForm').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let url = $('#pdf_id').val() ? "{{ route('pdfs.update', '') }}/" + $('#pdf_id').val() : "{{ route('pdfs.store') }}";
            let method = $('#pdf_id').val() ? 'PUT' : 'POST';

            $.ajax({
                url: url,
                type: method,
                data: formData,
                contentType: false, // Important
                processData: false, // Important
                cache: false,
                success: function(response) {
                    $('#pdfModal').modal('hide');
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
            $.get("{{ route('pdfs') }}/" + id + "/edit", function(data) {
                $('#pdf_id').val(data.id);
                $('#name').val(data.name);
                $('#description').val(data.description);
                $('#pdfModal').modal('show');
            });
        });

        // Delete Record
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: "{{ route('pdfs') }}/" + id,
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