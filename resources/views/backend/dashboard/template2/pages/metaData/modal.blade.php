<div class="modal fade" id="metaDataModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Meta Data') }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="metaDataForm">
                    @csrf
                    <input type="hidden" id="metaData_id">
                    
                    <div class="form-group">
                        <label for="key" class="form-label">{{ __('Key') }}</label>
                        <input type="text" class="form-control" id="key" name="key" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="value" class="form-label">{{ __('Value') }}</label>
                        <input type="text" class="form-control" id="value" name="value" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
