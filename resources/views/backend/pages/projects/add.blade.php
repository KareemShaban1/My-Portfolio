@extends('backend.layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Project</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">


                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control select2" style="width: 100%;">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client">Client</label>
                                    <input type="text" class="form-control" id="client" name="client"
                                        placeholder="Client">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="github_link">Github Link</label>
                                    <input type="text" class="form-control" id="github_link" name="github_link"
                                        placeholder="Github Link">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="live_link">Live Link</label>
                                    <input type="text" class="form-control" id="live_link" name="live_link"
                                        placeholder="Live Link">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="date" name="date"
                                        placeholder="Date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Project Info
                                        </h3>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">
                                            <textarea class="textarea" name="info" placeholder="Place some text here"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>


                        <div class="form-group">
                            <label for="main_image"> Main Image<span class="text-danger">*</span></label>
                            <input class="form-control" name="main_image" id="main_image" type="file" accept="image/*">

                        </div>

                        <div class="form-group">
                            <label for="images"> Images<span class="text-danger">*</span></label>
                            <input class="form-control" name="images[]" id="images" type="file" accept="image/*"
                                multiple="multiple">

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
