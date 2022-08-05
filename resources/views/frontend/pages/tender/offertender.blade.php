@extends('frontend.layouts.master')

@section('title', 'Offer Tender')

@section('content')
<!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs img1">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
               Offer Tender
                <span class="watermark">Offer Tender</span>
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- content start -->
<div class="rs-my-account pt-20 pb-20 md-pt-70 md-pb-70" style="border-radius: 5px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 md-mb-50 shadow p-4">
                <h2 class="title pb-30 md-pb-15">Add Jobs</h2>
                <div class="rs-login">
                    <div class="form-group mb-30">
                        <label>Vat ID<span>*</span></label>
                        <input class="form-control-mod" type="number" required=""> 

                        <label>Select Method<span>*</span></label>
                        <select class="form-control" name="" id="select_two" style="height: 40px!important">
                            <option value="">Select Option </option>
                            <option value="">MLT</option>
                            <option value="">MLT</option>
                            <option value="">MLT</option>
                            <option value="">MLT</option>
                        </select>
                        
                        <label>Last Selling Date<span>*</span></label>
                        <input class="form-control-mod" type="number" required=""> 
                        <label>Service Charge 100Tk <span>*</span></label>
                        <input id="tname" name="text" class="form-control-mod" type="number" required="">
                    </div>
                    <div class="custom-apply-btn">
                        <a href="#">Post Job</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
<!-- content End -->
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/select2/select2.min.css')}}">
@endpush

@push('js')
    <script src="{{ asset('frontend/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#select_two').select2();
        });
    </script>
@endpush