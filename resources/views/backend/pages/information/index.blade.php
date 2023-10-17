@extends('backend.layouts.master')

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

@section('content')
    {{-- <div class="row"> --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Portfolio Information</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Key</th>
                        <th>Value</th>
                        <th>Controls</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($information as $info)
                        <tr>
                            <td>{{ $info->id }}</td>
                            <td>{{ $info->key }}</td>
                            <td>{{ Str::limit($info->value, 105) }}</td>
                            <td>
                                <a href="{{ route('information.edit', $info->id) }}" class="btn  btn-warning">Edit</a>
                                <a href="" class="btn  btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    {{-- </div> --}}
@endsection

@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
