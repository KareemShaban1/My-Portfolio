<div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Information') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="informationForm">
                    @csrf
                    <input type="hidden" id="information_id">


                    <input type="hidden" name="entity_type" value="template">
                    <input type="hidden" name="type" value="template">


                    <div class="form-group">
                        <label for="entity_id">{{ __('Template') }}</label>
                        <select name="entity_id" id="entity_id" class="form-control">
                            @foreach (App\Models\Template::all() as $template)
                            <option value="{{ $template->id }}">{{ $template->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="key">{{ __('Key') }}</label>
                        <input type="text" class="form-control" id="key" name="key" required>
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('Value') }}</label>
                        <input type="text" class="form-control" id="value" name="value" required>
                    </div>

                    <div class="mt-3">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>