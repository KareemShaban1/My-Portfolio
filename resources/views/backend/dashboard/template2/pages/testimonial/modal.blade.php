<div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Testimonial') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="testimonialForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="testimonial_id">


                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_name" class="form-label">{{ __('Client Name') }}</label>
                                <input type="text" class="form-control" id="client_name" name="client_name"
                                    placeholder="Client Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_job" class="form-label">{{ __('Client Job') }}</label>
                                <input type="text" class="form-control" id="client_job" name="client_job"
                                    placeholder="client Job">
                            </div>
                        </div>
                    </div>

                  

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('Text') }}
                                    </h3>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-3">
                                        <textarea class="textarea" name="text" id="text" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>


                    <div class="row mb-2">
                        <div class="form-group">
                            <label for="client_image" class="form-label"> {{ __('Client Image') }}</label>
                            <input class="form-control" name="client_image" id="client_image" type="file" accept="image/*">
                        </div>


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