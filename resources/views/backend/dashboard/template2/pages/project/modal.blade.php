<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Project') }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="projectForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="project_id">

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">{{ __('Category') }}</label>
                                <select name="category_id" class="form-control select2" style="width: 100%;">
                                    @foreach (App\Models\ProjectsCategory::all() as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date" class="form-label">{{ __('Date') }}</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    placeholder="Date">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-label">{{ __('Title') }}</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client" class="form-label">{{ __('Client') }}</label>
                                <input type="text" class="form-control" id="client" name="client"
                                    placeholder="Client">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="github_link" class="form-label">{{ __('Github Link') }}</label>
                                <input type="text" class="form-control" id="github_link" name="github_link"
                                    placeholder="Github Link">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="live_link" class="form-label">{{ __('Live Link') }}</label>
                                <input type="text" class="form-control" id="live_link" name="live_link"
                                    placeholder="Live Link">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('Info') }}
                                    </h3>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-3">
                                        <textarea class="textarea" name="info" id="info" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                        </textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>


                    <div class="row mb-2">
                        <div class="form-group">
                            <label for="main_image" class="form-label"> {{ _('Main Image') }}<span class="text-danger">*</span></label>
                            <input class="form-control" name="main_image" id="main_image" type="file" accept="image/*">
                            <div id="main_image_preview" class="mt-2">
                                <!-- Preview will be inserted here -->
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="images" class="form-label">{{ __('Images') }}<span class="text-danger">*</span></label>
                            <input class="form-control" name="images[]" id="images" type="file" accept="image/*"
                                multiple="multiple">
                            <div id="images_preview" class="mt-2 d-flex flex-wrap gap-2">
                                <!-- Previews will be inserted here -->
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>