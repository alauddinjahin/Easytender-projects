@extends('backend.layouts.master')

@section('content')
    <div class="row p-3">
        <div class="card">
            <div class="card-header">
                <span class="h3 text-uppercase">All tender methods</span>
                <a href="#" class="btn btn-success float-end">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered table-striped">
                        <thead class="bg-light text-center">
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
                                    <td>01</td>
                                    <td>MLM</td>
                                    <td>MSL</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" role="button">Edit</a>
                                        <a href="#" class="btn btn-danger" role="button">Delete</a>
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