@extends('backend.layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Portfolio Image</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('portfolioImages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image_name">Image Name</label>
                            <input type="text" class="form-control" id="image_name" name="image_name"
                                placeholder="Image Name">
                        </div>

                        <div class="form-group">
                            <label for="image"> Image<span class="text-danger">*</span></label>
                            <input class="form-control" name="image" id="image" type="file" accept="image/*">

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
@endsection
