@extends('frontend.layouts.master')

@section('title', 'Client Dashboard')

@section('content')

 <!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs img1">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
               Dashboard
                <span class="watermark">Dashboard</span>
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Start content -->
<div class="rs-about style2">
    <div class="container py-5">
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
        <div class="row">
            <div class="tab tab-menu col-md-3">
                <span class="menu-header">User Information</span>
                <button class="tablinks active" onclick="openCity(event, 'dashboard')" id="defaultOpen">My Dashboard</button>
                <button class="tablinks" onclick="openCity(event, 'my-profile')" >My Profile</button>
                <button class="tablinks" onclick="openCity(event, 'offer-new-Job')">Create New Offer</button>
                <button class="tablinks" onclick="openCity(event, 'Offered-list')">My Offered Job List</button>
                <button class="tablinks" onclick="openCity(event, 'payment-history')">Payment History</button>
            </div>
            <div class="tabcontent col-md-9" id="dashboard">
                <div class="row px-3">
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Offered Job</span>
                            </div>
                            <div class="card-body h3">
                                Total: 6543 Job
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Completed Job</span>
                            </div>
                            <div class="card-body h3">
                                Total: 654 Job
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Unpublished Job</span>
                            </div>
                            <div class="card-body h3">
                                Total: 35 Job
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Deadline over</span>
                            </div>
                            <div class="card-body h3">
                                Total: 12 Job

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Payment</span>
                            </div>
                            <div class="card-body h3">
                                Pay: 3432 BDT
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabcontent col-9" id="my-profile" >
                <div class="row profile-content py-2">
                    <div class="col-md-3 profile-image" >
                        @if (isset($client_profile->photo))
                            <img src="{{asset($client_profile->photo)}}" class="img-thumbnail" alt="My Photo" >
                        @else
                            <img src="/backend/images/users/demo_user.webp" class="img-thumbnail" alt="My Photo" >
                        @endif
                        <span><i class="fa fa-envelope fa-danger"> </i> {{ $client_profile->email ?? "" }}</span><br>
                        <span><i class="fa fa-phone fa-danger"> </i> {{ auth()->user()->phone }}</span><br>
                        <span><i class="fa fa-map-marker fa-danger"> </i> {{ $client_profile->address ?? ""}}</span>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-uppercase display-6">{{ auth()->user()->name }}</span>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-profile-edit" data-bs-toggle="modal" data-bs-target="#profile-edit-modal"><i class="fa fa-pencil fa-danger"></i> </button>
                            </div>
                        </div>
                        <div class="line"></div>
                        <p>{{ $client_profile->about ?? "" }}</p>
                    </div>
                </div>
            </div>

            <div class="tabcontent col-9" id="offer-new-Job">
                <div class="row profile-content p-4"> 
                    <form action="{{ route('client.tender.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="vat-id" class="col-form-label">Vat Id</label>
                            </div>
                            <div class="col-md-9">
                                <select name="vat_id[]" id="vat_id" multiple data-placeholder="Type Your vat-id" title="Type then press enter!" required></select>
                            </div>
                        </div> 
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="method-selection" class="col-form-label">Select Method:</label>
                            </div>
                            <div class="col-md-9">
                                <select name="tender_method" id="method-selection" class="form-control" required>
                                    <option value="">Select Method</option>
                                    @foreach ($tender_methods as $item)
                                        <option value="{{ $item->id }}">{{ $item->short_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="last-selling-date" class="col-form-label">Last Selling Date</label>
                            </div>
                            <div class="col-md-9">
                                <input type="date" name="last_selling_date" class="form-control " id="last-selling-date" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="charge" class="col-form-label">Service Charge:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="service_charge" class="form-control " id="charge" placeholder="Type Service charge" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label class="col-form-label">Total Charge:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="total_charge" class="form-control " id="total-charge" placeholder="0.00" required readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label class="col-form-label">Publish status:</label>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex gap-4"> 
                                    <label for="publish" class="d-flex gap-1"><input type="radio" name="status" id="publish" value="publish"> <small>Publish</small></label>
                                    <label for="unpublish" class="d-flex gap-1"><input type="radio" name="status" id="unpublish" value="unpublish" checked> <small>Unpublish</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-custom float-end">Create Offer</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div> 

            <div class="tabcontent col-9" id="Offered-list">
                <div class="card ">
                    <div class="card-header">
                        My Offered Job List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive pb-3">
                            <table id="Offered-list-table" class="table table-striped nowrap">
                                <thead>
                                    <tr class="text-center">
                                        <th>SL</th>
                                        <th>JOb ID</th>
                                        <th>Batch ID</th>
                                        <th>Vat ID</th>
                                        <th>Charge</th>
                                        <th>Last Salling Date</th>
                                        <th>Method</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_tender as $tender)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tender->id }}</td>
                                            <td>{{ $tender->batch_id }}</td>
                                            <td>{{ $tender->vat_id }}</td>
                                            <td>{{ $tender->total_charge }} BDT</td>
                                            <td>{{ $tender->last_selling_date }}</td>
                                            <td>{{ $tender->tender_method }}</td>
                                            <td>
                                                <span class="badge @if ($tender->status == "publish") bg-info @elseif($tender->status == "unpublish") bg-warning @elseif($tender->status == "complete") bg-success @elseif($tender->status == "failed") bg-danger @elseif($tender->status == "processing") bg-primary @endif">{{ $tender->status }}</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-edit" data-id="{{ $tender->id }}" role="button">Edit</a>
                                                @if ($tender->status == "publish")
                                                    <a href="#" class="btn btn-danger btn-bids" data-id="{{ $tender->id }}" role="button">Bids</a>
                                                @else
                                                    <a href="#" class="btn btn-dark" disabled role="button">Bids</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="tabcontent col-9" id="payment-history">
                <div class="table-responsive">
                    <table id="payment-history-table" class="table table-striped nowrap">
                        <thead>
                            <tr class="text-center">
                                <th>SL No</th>
                                <th>Transaction ID</th>
                                <th>Job ID</th>
                                <th>Payment Amount</th>
                                <th>Payment Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>032323232</td>
                                <td>System Architect</td>
                                <td>4500 BDT</td>
                                <td>24 Aug 2022</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>032323232</td>
                                <td>System Architect</td>
                                <td>4500 BDT</td>
                                <td>24 Aug 2022</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
</div>

  {{-- Modal start --}}
  <div class="modal fade" id="freelancerModalToggle" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Bid User List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table id="freelancers-table" class="table table-striped nowrap">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>JOb ID</th>
                            <th>User ID</th>
                            <th>Vat ID</th>
                            <th>Charge</th>
                            <th>Last Salling Date</th>
                            <th>Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="pb-4">
                        {{-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="approvalModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="approvalModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="approvalModal">Bid Approval</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('upload_file_to_freelancer') }}" method="post" enctype="multipart/form-data" id="upload-attachment-form">
            @csrf
            <div class="row mb-3">
                <label for="phone" class="col-md-3 col-form-label">Phone</label>
                <div class="col-md-9">
                  <input type="text" name="phone" class="form-control" id="phone" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-3 col-form-label">File Upload</label>
                <div class="col-md-9">
                    <div class="row" id="file-upload">
                        <div class="col-11 mb-2">
                            <input type="file" name="attachment[]" class="form-control" id="file">
                        </div>
                        <div class="col-1">
                            <button class="btn btn-success float-end" id="btn-add-file-upload" type="button" title="Add more file"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <!-- <button type="submit" class="btn btn-danger float-end">Submit</button> -->
                    @php
                        $orderData = [
                            'tender_id'=>1,
                            'payment_by'=>1,
                            'freelancer_id'=>1,
                            'amount'=>100,
                        ];   
                    @endphp
                    <button class="your-button-class" id="sslczPayBtn"
                        postdata=""
                        order="{{ json_encode($orderData) }}"
                        endpoint="/pay-via-ajax"> Pay Now
                    </button>
                </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Pfofile modal  --}}
 
  <div class="modal fade" id="profile-edit-modal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('client.profile.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="profile-edit-modal-label">Profile Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="name" class="col-form-label">Your Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control " id="name" value="{{ auth()->user()->name }}" readonly>
                            </div>
                        </div> 
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="phone" class="col-form-label">Your Phone:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="phone" class="form-control " id="phone" value="{{ auth()->user()->phone }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="email" class="col-form-label">Your Email:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control " id="email" value="{{ old('email')}}" placeholder="test@example" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="photo" class="col-form-label">Your photo:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="photo" class="form-control " id="photo"  placeholder="Select Your Photo" required >
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="address" class="col-form-label">Your Address:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="address" class="form-control " id="address" value="{{ old('address') }}" placeholder="Type Your Address" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label for="about" class="col-form-label">About</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="about" id="about" class="form-control" required></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-custom" >Update</button>
                </div>
            </form>
        </div>
    </div>
  </div> 
  {{-- tender Edit modal  --}}
 
  <div class="modal fade" id="tenderEditrModalToggle" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="tenderEditrModalToggle-label">Tender Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="vat-id" class="col-form-label">Vat Id</label>
                        </div>
                        <div class="col-md-9">
                            <select name="vat_id" id="edit-vat_id" data-placeholder="Type Your vat-id" multiple>
                                <option selected value="0000001">0000001</option>
                                <option selected value="0000002">0000002</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="method-selection" class="col-form-label">Select Method:</label>
                        </div>
                        <div class="col-md-9">
                            <select name="method_selection" id="method-selection" class="form-control">
                                <option value="">MLT</option>
                                <option value="">MLM</option>
                                <option value="">MLT</option>
                                <option value="">MLT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="last-selling-date" class="col-form-label">Last Selling Date</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" name="last_selling_date" class="form-control " id="last-selling-date" >
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="charge" class="col-form-label">Service Charge:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="charge" class="form-control " id="charge-edit" placeholder="Type Service charge">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label class="col-form-label">Total Charge:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="total_charge" class="form-control " id="total-charge-edit" placeholder="0.00" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label class="col-form-label">Publish status:</label>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex gap-4"> 
                                <label for="publish" class="d-flex gap-1"><input type="radio" name="publish_status" id="publish"> <small>Publish</small></label>
                                <label for="unpublish" class="d-flex gap-1"><input type="radio" name="publish_status" id="unpublish" checked> <small>Unpublish</small></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-custom float-end">Update</button>
                        </div>
                    </div>

                </form>
            </div>
            
        </div>
    </div>
  </div>

  {{-- Modal end --}}
    
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/vendor/datatable/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/user-dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom.css')}}">
    <style>
        .box{
            background-color: #efd1d5;
        }
    </style>
@endpush

@push('js')
<script src="{{ asset('frontend/vendor/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('frontend/custom.js')}}"></script>

<script>
    (function($){
        $(document).ready(function(){
            $("#Offered-list-table, #payment-history-table, #freelancers-table").DataTable();
            
            $(document).on('click', '#btn-add-file-upload', addFileUploadMore);
            $(document).on('click', '.btn-remove-file-upload', removeFileUploadMore);
            $(document).on('change', '#vat_id', updateTotalCharge);
            $(document).on('keyup', '#charge', updateTotalCharge);
            $(document).on('change', '#edit-vat_id', updateTotalChargeintoModal);
            $(document).on('keyup', '#charge-edit', updateTotalChargeintoModal);
            
            $(document).on('click', '.btn-edit', tenderUpdateModal);
            $(document).on('click', '.btn-bids', triggerBidUsers);
            $(document).on('click', '.btn-apporval', triggerBtnApproval);
            init();
        });
    })(jQuery)
    
    function init(){
        $('#vat_id').select2({
            theme           : 'bootstrap4',
            tags: true
        }).trigger("change")

        $('#edit-vat_id').select2({
            theme           : 'bootstrap4',
            dropdownParent: $('#tenderEditrModalToggle'),
        });
     
    }

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    function addFileUploadMore() {
        let id = new Date().getTime();
        const inputText = `
                <div class="col-11 mb-2">
                    <input type="file" name="attachment[]" class="form-control " id="file_${id}">
                </div>
                <div class="col-1">
                    <button class="btn btn-danger float-end btn-remove-file-upload" data-fileid="file_${id}" type="button" title="Remove file"><i class="fa fa-times"></i></button>
                </div>
        `;
        $("#file-upload").append(inputText);
        console.log('add new file');
    }
    
    function removeFileUploadMore() {
        let id = $(this).attr('data-fileid');
        $(`#${id}`).remove();
        $(this).remove();
        
    }
    
    function updateTotalCharge() {
        $("#total-charge").val($("#charge").val() * $("#vat_id option").length);
    }
    
    function updateTotalChargeintoModal() {
        $("#total-charge-edit").val($("#charge-edit").val() * $("#edit-vat_id option").length);
    }

    function tenderUpdateModal() {
        const el = $(this);
        const payload   = {
            tender_id : el.data('id')
        }
        $.ajax({
            url      : '/api/get-tender',
            method   : 'GET',
            dataType : 'json',
            data     : payload,
            beforeSend() {
                el.prop('disabled', true);
            },
            success(res){
                // console.log(res);
                showEditModal(res);
            },
            error(err){
               console.log(err);
            },
            complete() {
                el.prop('disabled', false);
            }
        });
    }
    function triggerBidUsers(){
        const el = $(this);
        const payload   = {
            tender_id : el.data('id')
        }
        $.ajax({
            url      : '/api/get-bided-users',
            method   : 'GET',
            dataType : 'json',
            data     : payload,
            beforeSend() {
                el.prop('disabled', true);
            },
            success(res){
                // console.log(res);
                showBidedUsers(res);
                // $('#freelancerModalToggle').modal('show');
            },
            error(err){
               console.log(err);
            },
            complete() {
                el.prop('disabled', false);
            }
        });
    }

    function showEditModal(tender_data) { 
        console.log(tender_data);
        // $('#edit-vat_id').val(tender_data.vat_id);
        $('#tenderEditrModalToggle').modal('show');
    }

    function showBidedUsers(res) {
        // console.log(res);
        const tbody =[];
        $.each(res, (index, value) => { 
            tbody.push(`
            <tr>
                <td>${index+1}</td>    
                <td>${value.tender_id}</td>    
                <td>${value.freelancer_name}</td>    
                <td>${value.vat_id}</td>    
                <td>${value.total_charge}</td>    
                <td>${value.last_selling_date}</td>    
                <td>${value.tender_method}</td>  
                <td><button class="btn btn-danger btn-apporval" role="button" data-bid-id="${value.bid_id}" data-freelancer-id="${value.freelancr_id}" data-tender-id="${value.tender_id}" data-client-id="${value.client_id}">Approval</button></td>  
            </tr>`);
        });
        $("#freelancers-table tbody").html(tbody.join(''));
        $('#freelancerModalToggle').modal('show');

    }

    function triggerBtnApproval(){
        const el = $(this);
        console.log($('#sslczPayBtn').val());

        const bid_id = el.data('bid-id')
        const tender_id = el.data('tender-id')
        const client_id = el.data('client-id')
        const freelancer_id= el.data('freelancer-id')

        // const reqData = {
        //     bid_id       : el.data('bid-id'),
        //     tender_id    : el.data('tender-id'),
        //     client_id    : el.data('client-id'),
        //     freelancer_id: el.data('freelancer-id')
        // }
        // $('sslczPayBtn').attr({order:reqData});

        const fields = `
                        <input type='hidden' name='bid_id' value='${bid_id}'>
                        <input type='hidden' name='tender_id' value='${tender_id}'>
                        <input type='hidden' name='client_id' value='${client_id}'>
                        <input type='hidden' name='freelancr_id' value='${freelancer_id}'>
                    `;
        $("#upload-attachment-form").append(fields);
        $('#freelancerModalToggle').modal('hide');
        $('#approvalModal').modal('show');
    }
</script>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
@endpush
