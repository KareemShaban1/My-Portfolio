<div class="modal fade" id="templateModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Personal Experience') }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="templateForm">
                    @csrf
                    <input type="hidden" id="template_id">

                    <div class="form-group">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">{{ __('Description') }}</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group">
                            <label for="main_image" class="form-label"> {{ __('Main Image') }}<span class="text-danger">*</span></label>
                            <input class="form-control" name="main_image" id="main_image" type="file" accept="image/*">
                            <div id="main_image_preview" class="mt-2"></div>
                        </div>

                        <div class="form-group">
                            <label for="images" class="form-label">{{ __('Images') }}<span class="text-danger">*</span></label>
                            <input class="form-control" name="images[]" id="images" type="file" accept="image/*" multiple="multiple">
                            <div id="images_preview" class="mt-2 d-flex flex-wrap gap-2"></div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>