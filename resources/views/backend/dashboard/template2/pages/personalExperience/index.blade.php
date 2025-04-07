@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ __('Personal Experience') }}</h2>
    <button class="btn btn-success mb-3" id="addNew">{{ __('Add Personal Experience') }}</button>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="personalExperienceTable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Job Title')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.personalExperience.modal')

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#personalExperienceTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('personalExperience') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'job_title',
                    name: 'job_title'
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
            $('#personalExperienceForm')[0].reset();
            $('#personalExperienceModal').modal('show');
        });

        // Submit Create/Update Form
        $('#personalExperienceForm').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            let url = $('#personalExperience_id').val() ? "{{ route('personalExperience.update', '') }}/" + $('#personalExperience_id').val() : "{{ route('personalExperience.store') }}";
            let method = $('#personalExperience_id').val() ? 'PUT' : 'POST';

            $.ajax({
                url: url,
                type: method,
                data: formData,
                success: function(response) {
                    $('#personalExperienceModal').modal('hide');
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
            $.get("{{ route('personalExperience') }}/" + id + "/edit", function(data) {
                $('#personalExperience_id').val(data.id);
                $('#name').val(data.name);
                $('#job_title').val(data.job_title);
                $('#start_date').val(data.start_date);
                $('#end_date').val(data.end_date);
                $('#description').val(data.description);
                $('#personalExperienceModal').modal('show');
            });
        });

        // Delete Record
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: "{{ route('personalExperience') }}/" + id,
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