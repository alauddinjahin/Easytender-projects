@extends('backend.layouts.master')

@section('content')
    <div class="row p-3">
        <div class="card">
            <div class="card-header">
                <span class="h3 text-uppercase">All tender methods</span>
                <a href="{{ route('tender_method_create') }}" class="btn btn-success float-end">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                            <strong>{{session('success')}}</strong>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped text-center" id="tender-method-table">
                        <thead class="bg-light ">
                            <tr>
                                <th>Sl No</th>
                                <th>Tender Method name</th>
                                <th>Short Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_methods as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->short_name }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" role="button" >Edit</a>
                                        <a href="{{ route('method.destroy', $item->id) }}" class="btn btn-danger" role="button">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/vendor/datatable/css/jquery.dataTables.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('frontend/vendor/datatable/jquery.dataTables.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            $("#tender-method-table").DataTable();
        })(jQuery)
    </script>
@endpush