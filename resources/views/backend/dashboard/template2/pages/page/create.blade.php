@extends('backend.dashboard.template2.layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ __('Add Page') }}</h2>
</div>

<div class="card">
    <div class="card-body">

        <form action="{{ route('pages.store') }}" id="pageForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="page_id">

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">{{ __('Template') }}</label>
                        <select name="template_id" class="form-control select2" style="width: 100%;">
                            @foreach (App\Models\Template::all() as $template)
                            <option value="{{ $template->id }}">
                                {{ $template->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_title" class="form-label">{{ __('Meta Title') }}</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title">
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ __('Meta Description') }}
                            </h3>
                        </div>
                        <div class="card-body pad">
                            <div class="mb-3">
                                <textarea class="textarea" name="meta_description" id="meta_description" placeholder="Meta Description"
                                    style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ __('Meta Keywords') }}
                            </h3>
                        </div>
                        <div class="card-body pad">
                            <div class="mb-3">
                                <textarea class="textarea" name="meta_keywords" id="meta_keywords" placeholder="Meta Keywords"
                                    style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Information Rows with Add/Remove -->
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Page Information') }}</h3>
                            <button type="button" class="btn btn-sm btn-success float-right" id="addInfoRow">
                                <i class="fas fa-plus"></i> {{ __('Add Row') }}
                            </button>
                        </div>
                        <div class="card-body" id="infoRowsContainer">
                            <!-- Initial row -->
                            <div class="row info-row mb-2">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="info_keys[]" placeholder="Key">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="info_values[]" placeholder="Value">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-row">
                                        <i class="mdi mdi-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Image with Preview -->
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="main_image" class="form-label">{{ __('Main Image') }}<span class="text-danger">*</span></label>
                        <input class="form-control" name="main_image" id="main_image" type="file" accept="image/*" onchange="previewImage(this, 'mainImagePreview')">
                        <div class="mt-2" id="mainImagePreviewContainer" style="display:none;">
                            <img id="mainImagePreview" src="#" alt="Main Image Preview" style="max-width: 200px; max-height: 200px;" class="img-thumbnail">
                            <button type="button" class="btn btn-sm btn-danger ml-2" onclick="clearImagePreview('main_image', 'mainImagePreviewContainer')">
                                <i class="fas fa-times"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="images" class="form-label">{{ __('Images') }}<span class="text-danger">*</span></label>
                        <input class="form-control" name="images[]" id="images" type="file" accept="image/*" multiple onchange="previewMultipleImages(this, 'multipleImagesPreview')">
                        <div class="mt-2" id="multipleImagesPreviewContainer" style="display:none;">
                            <div class="d-flex flex-wrap" id="multipleImagesPreview"></div>
                            <button type="button" class="btn btn-sm btn-danger mt-2" onclick="clearMultipleImagesPreview('images', 'multipleImagesPreviewContainer')">
                                <i class="fas fa-times"></i> Remove All
                            </button>
                        </div>
                    </div>
                </div>
            </div>

           

            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>

    </div>
</div>


@endsection

@push('scripts')
<script>
    // Image preview functions
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(previewId).src = e.target.result;
                document.getElementById(previewId + 'Container').style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewMultipleImages(input, previewContainerId) {
        const previewContainer = document.getElementById(previewContainerId);
        previewContainer.innerHTML = '';

        if (input.files && input.files.length > 0) {
            document.getElementById(previewContainerId + 'Container').style.display = 'block';

            for (let i = 0; i < input.files.length; i++) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgWrapper = document.createElement('div');
                    imgWrapper.className = 'position-relative mr-2 mb-2';
                    imgWrapper.style.width = '120px';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-thumbnail';
                    img.style.width = '100%';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';

                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.className = 'btn btn-xs btn-danger position-absolute';
                    removeBtn.style.top = '-10px';
                    removeBtn.style.right = '-10px';
                    removeBtn.innerHTML = '<i class="fas fa-times"></i>';
                    removeBtn.onclick = function() {
                        imgWrapper.remove();
                        // You might want to also remove the corresponding file from the input.files array
                    };

                    imgWrapper.appendChild(img);
                    imgWrapper.appendChild(removeBtn);
                    previewContainer.appendChild(imgWrapper);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    }

    function clearImagePreview(inputId, previewContainerId) {
        document.getElementById(inputId).value = '';
        document.getElementById(previewContainerId).style.display = 'none';
    }

    function clearMultipleImagesPreview(inputId, previewContainerId) {
        document.getElementById(inputId).value = '';
        document.getElementById(previewContainerId).style.display = 'none';
        document.getElementById(inputId.replace('images', 'multipleImagesPreview')).innerHTML = '';
    }

    // Dynamic row management
    document.addEventListener('DOMContentLoaded', function() {
        // Add new row
        document.getElementById('addInfoRow').addEventListener('click', function() {
            const container = document.getElementById('infoRowsContainer');
            const newRow = document.createElement('div');
            newRow.className = 'row info-row mb-2';
            newRow.innerHTML = `
                <div class="col-md-5">
                    <input type="text" class="form-control" name="info_keys[]" placeholder="Key">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="info_values[]" placeholder="Value">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-row">
                        <i class="mdi mdi-trash-can"></i>
                    </button>
                </div>
            `;
            container.appendChild(newRow);
        });

        // Remove row (using event delegation for dynamically added elements)
        document.getElementById('infoRowsContainer').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-row') || e.target.closest('.remove-row')) {
                const row = e.target.closest('.info-row');
                if (document.querySelectorAll('.info-row').length > 1) {
                    row.remove();
                } else {
                    // Clear inputs if it's the last row
                    row.querySelectorAll('input').forEach(input => input.value = '');
                }
            }
        });
    });
</script>
@endpush