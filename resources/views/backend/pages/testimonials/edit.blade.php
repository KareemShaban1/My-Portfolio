@extends('backend.layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Testimonials</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_name">Client Name</label>
                                    <input type="text" class="form-control" value="{{ $testimonial->client_name }}"
                                        id="client_name" name="client_name" placeholder="Client Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_job">Client Job</label>
                                    <input type="text" class="form-control" id="client_job"
                                        value="{{ $testimonial->client_job }}" name="client_job" placeholder="Client Job">
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Text
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">
                                            <textarea class="textarea" name="text" placeholder="Place some text here"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                {{ $testimonial->text }}
                                            </textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>


                        <div class="form-group">
                            <label for="client_image"> Main Image<span class="text-danger">*</span></label>
                            <input class="form-control" name="client_image" id="client_image" type="file"
                                accept="image/*">

                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>

    @push('scripts')
        <script>
            $(function() {
                // Summernote
                $('.textarea').summernote()
            })
        </script>
    @endpush
@endsection
