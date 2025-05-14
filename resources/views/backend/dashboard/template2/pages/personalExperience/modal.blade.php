<div class="modal fade" id="personalExperienceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Personal Experience') }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="personalExperienceForm">
                    @csrf
                    <input type="hidden" id="personalExperience_id">
                    
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="type" class="form-label">{{ __('Type') }}</label>
                        <select name="type" id="type" class="form-control">
                            <option value="education">{{ __('Education') }}</option>
                            <option value="work">{{ __('Work') }}</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="job_title" class="form-label">{{ __('Job Title') }}</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="location" class="form-label">{{ __('Location') }}</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="start_date" class="form-label">{{ __('Start Date') }}</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="end_date" class="form-label">{{ __('End Date') }}</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">{{ __('Description') }}</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
