@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-3">
        <h2 class="mb-4">{{ __('Template') }}</h2>
        <button class="btn btn-success mb-3" id="addNew">{{ __('Add Template') }}</button>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="templateTable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Main Image') }}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Pages Count')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.template2.pages.template.modal')

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#templateTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('templates') }}",
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
                    data: 'pages_count',
                    name: 'pages_count'
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
            $('#templateForm')[0].reset();
            $('#templateModal').modal('show');
        });

        // Submit Create/Update Form
        $('#templateForm').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let url = $('#template_id').val() ? "{{ route('templates.update', '') }}/" + $('#template_id').val() : "{{ route('templates.store') }}";
            let method = $('#template_id').val() ? 'PUT' : 'POST';

            $.ajax({
                url: url,
                type: method,
                data: formData,
                contentType: false, // Important
                processData: false, // Important
                cache: false,
                success: function(response) {
                    $('#templateModal').modal('hide');
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
            $.get("{{ route('templates') }}/" + id + "/edit", function(data) {
                $('#template_id').val(data.id);
                $('#name').val(data.name);
                $('#description').val(data.description);
                if (data.main_image_url) {
                    $('#main_image_preview').html(`<img src="${data.main_image_url}" alt="Main Image" style="max-height: 150px;">`);
                } else {
                    $('#main_image_preview').html('');
                }

                // Images Preview
                let imagesHtml = '';
                if (data.gallery_images && Array.isArray(data.gallery_images)) {
                    data.gallery_images.forEach(function(imgUrl) {
                        imagesHtml += `<img src="${imgUrl}" alt="Image" style="max-height: 100px; margin-right: 10px;">`;
                    });
                }
                $('#images_preview').html(imagesHtml);
                $('#templateModal').modal('show');
            });
        });

        // Delete Record
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: "{{ route('templates') }}/" + id,
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

<script>
    document.getElementById('main_image').addEventListener('change', function(event) {
        const preview = document.getElementById('main_image_preview');
        preview.innerHTML = '';
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-thumbnail');
                img.style.maxWidth = '150px';
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('images').addEventListener('change', function(event) {
        const preview = document.getElementById('images_preview');
        preview.innerHTML = '';

        Array.from(event.target.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-thumbnail', 'me-2', 'mb-2');
                img.style.maxWidth = '100px';
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    });
</script>

@endpush