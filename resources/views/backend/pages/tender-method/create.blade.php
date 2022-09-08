@extends('backend.layouts.master')

@section('content')
    <div class="row p-3">
        <div class="card">
            <div class="card-header">
                <span class="h3 text-uppercase">create new tender methods</span>
                <a href="{{ route('tender_method_create') }}" class="btn btn-success float-end">Add New</a>
            </div>
            <div class="card-body">
                <form action="{{ route('method.create') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-3">
                        <label class="col-md-3">Tender Method Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3">Tender Method Short Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="short_name">
                        </div>
                    </div>
                    <button type="submit" class="float-end btn btn-primary">SAVE</button>
                </form>
            </div>
        </div>

    </div>
@endsection