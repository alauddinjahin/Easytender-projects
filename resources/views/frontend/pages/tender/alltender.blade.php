@extends('frontend.layouts.master')

@section('title', 'All Vat')

@section('content')

 <!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs img1">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
               All vat
                <span class="watermark">All Vat</span>
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Start content -->

    <div class="container">
        <div class="row mt-5 mb-5">
            <div id="btnContainer">
                <button class="btn float-end active" id="listView" title="List view"><i class="fa fa-bars"></i></button> 
                <button class="btn float-end " id="gridView" title="Grid view"><i class="fa fa-th-large"></i></button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                    <strong>{{session('success')}}</strong>
                </div>
            @endif
            @foreach ($all_tender as $item)
                <div class="col-md-4  m-0 p-0">
                    <div class="all-vat-card px-3 py-4">
                        <table class="all-vat-card-wrap">
                            <tr >
                                <th>JOB ID</th>
                                <td>&nbsp;:&nbsp;</td>
                                <td><span>{{ $item->id }}</span></td>
                            </tr>   
                            <tr >
                                <th>Batch ID</th>
                                <td>&nbsp;:&nbsp;</td>
                                <td><span>{{ $item->batch_id }}</span></td>
                            </tr>   
                            <tr >
                                <th>Vat ID</th>
                                <td>&nbsp;:&nbsp;</td>
                                <td><span>{{ $item->vat_id }}</span></td>
                            </tr>   
                            <tr>
                                <th>Last Droping Date</th>
                                <td>&nbsp;:&nbsp;</td>
                                <td><span>{{ $item->last_selling_date }}</span></td>
                            </tr>   
                            <tr>
                                <th>Method</th>
                                <td>&nbsp;:&nbsp;</td>
                                <td><span>{{ $item->tender_method }}</span></td>
                            </tr>
                            <tr>
                                <th>Service Charge</th>
                                <td>&nbsp;:&nbsp;</td>
                                <td><span>{{ $item->total_charge }} BDT</span></td>
                            </tr> 
                        </table>
                        <div class="custom-apply-btn">
                            <a href="{{ route('apply.job',$item->id) }}" class="apply-btn" role="button">Apply</a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- End grid view --}}
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="all-tender-table">
                    <tr>
                        <th>Job Id</th>
                        <th>Batch </th>
                        <th>Vat Id</th>
                        <th>Last Droping Date</th>
                        <th>Method</th>
                        <th>Service Chare</th>
                        <th>Action </th>
                    </tr>
                    @foreach ($all_tender as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->batch_id }}</td>
                            <td>{{ $item->vat_id }}</td>
                            <td>{{ $item->last_selling_date }}</td>
                            <td>{{ $item->tender_method }}</td>
                            <td>{{ $item->total_charge }} BDT</td>
                            <td class="text-center">
                                <div class="custom-apply-btn"><a href="{{ route('apply.job',$item->id) }}" class="apply-btn" role="button" >Apply</a></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{ $all_tender->links('pagination::bootstrap-5') }}
        </div>
    </div>
    

<!-- end content -->
    
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom.css')}}">
<style>
    .active{
        background-color: rgb(237, 231, 231)
    }
</style>
@endpush

@push('js')
    <script>
       (function($){
            $(document).ready(function(){
                $('.all-vat-card').hide(); 
                $('.table-responsive').show();
                $(document).on('click', '#gridView', gridView);
                $(document).on('click', '#listView', listView);
            });
        })(jQuery)

        function listView() {
            $('#listView').addClass('active');
            $('#gridView').removeClass('active');
            $('.all-vat-card').hide(); 
            $('.table-responsive').show();
        }

        function gridView() {
            $('#gridView').addClass('active');
            $('#listView').removeClass('active');
            $('.table-responsive').hide();
            $('.all-vat-card').show();
        }

    </script>
@endpush