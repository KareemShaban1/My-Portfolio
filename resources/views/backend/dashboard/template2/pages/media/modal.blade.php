<div class="modal fade" id="mediaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Edit Media') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="media-form">
                    @csrf
                    <input type="hidden" id="media_id">

                    <div class="mb-3">
                        <label class="form-label">{{ __('Current Image') }}</label>
                        <div>
                            <img id="media-preview" src="" alt="" width="100" height="100">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ __('Upload New Image') }}</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
