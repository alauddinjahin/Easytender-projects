@extends('frontend.layouts.master')

@section('title', 'MFreelancer Dashboard')

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
                <button class="tablinks" onclick="openCity(event, 'my-profile')">My Profile</button>
                <button class="tablinks" onclick="openCity(event, 'my-job-list')">My Job List</button>
                <button class="tablinks" onclick="openCity(event, 'payment-history')">Payment History</button>
            </div>
            <div class="tabcontent col-md-9" id="dashboard">
                <div class="row px-3">
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Completed Job</span>
                            </div>
                            <div class="card-body h3">
                                Total: 6543
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Failed Job</span>
                            </div>
                            <div class="card-body h3">
                                Total: 654
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Working Job</span>
                            </div>
                            <div class="card-body h3">
                                Total: 35
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3" >
                        <div class="card">
                            <div class="card-header text-center text-uppercase h4 box">
                                <span>Payment</span>
                            </div>
                            <div class="card-body h3">
                                Total: 12343 BDT 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabcontent col-9" id="my-profile" >
                <div class="row profile-content py-2">
                    <div class="col-md-3 profile-image" >
                        @if (isset($freelancer_profile->photo))
                            <img src="{{asset($freelancer_profile->photo)}}" class="img-thumbnail" alt="My Photo" >
                        @else
                            <img src="/backend/images/users/demo_user.webp" class="img-thumbnail" alt="My Photo" >
                        @endif
                        <span><i class="fa fa-envelope fa-danger"> </i> {{ $freelancer_profile->email ?? "" }}</span><br>
                        <span><i class="fa fa-phone fa-danger"> </i> {{ auth()->user()->phone }}</span><br>
                        <span><i class="fa fa-map-marker fa-danger"> </i> {{ $freelancer_profile->address ?? ""}}</span>
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
                        <p>{{ $freelancer_profile->about ?? "" }}</p>
                    </div>
                </div>
            </div>

            <div class="tabcontent col-9" id="my-job-list">
                <div class="table-responsive">
                    <table id="my-job-list-table" class="table table-striped nowrap">
                        <thead>
                            <tr class="text-center">
                                <th>Client</th>
                                <th>JOb ID</th>
                                <th>Vat ID</th>
                                <th>Get Paid(60%)</th>
                                <th>Last Date</th>
                                <th>Method</th>
                                <th class="text-center">Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($my_jobs as $item)
                                <tr>
                                    <td>{{ $item->client_name }}</td>
                                    <td>{{ $item->tender_id }}</td>
                                    <td>{{ $item->vat_id }}</td>
                                    <td>{{ $item->total_charge }}</td>
                                    <td>{{ $item->last_selling_date }}</td>
                                    <td>{{ $item->tender_method }}</td>
                                    <td>
                                        @if ($item->status === 'approved')
                                            <a href="{{ route('start_job',$item->tender_id) }}" class="badge bg-info p-1" title="click for start job">Start Job</a>
                                        @elseif($item->status === 'processing')
                                            <span class="badge bg-primary">Processing</span>
                                        @else
                                            <span class="badge bg-warning">Applyed</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-job-dtails" data-bs-toggle="modal" data-tender-id="{{ $item->tender_id }}" role="button">Job Details</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div> 
            
            <div class="tabcontent col-9" id="payment-history">
                <div class="table-responsive">
                    <table id="payment-history-table" class="table table-striped nowrap">
                        <thead>
                            <tr class="text-center">
                                <th>SL No</th>
                                <th>Client</th>
                                <th>Job ID</th>
                                <th>Transaction ID</th>
                                <th>Transaction Date</th>
                                <th>Payment By</th>
                                <th>Payment Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>System Architect</td>
                                <td>0000001</td>
                                <td>03232Ceb32323</td>
                                <td>10/12/2022</td> 
                                <td>Admin</td> 
                                <td>450 BDT</td> 
                            </tr>                       
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>


  {{-- Modal start --}}
  <div class="modal fade" id="jobDetailsModal" aria-hidden="true" aria-labelledby="jobDetailsModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Job Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table id="job details-table" class="table table-bordered">
                        <tr>
                            <th>Vat Id</th>
                            <td>123,323</td>
                        </tr>
                        <tr>
                            <th>Method</th>
                            <td>MLM</td>
                        </tr>
                        <tr>
                            <th>Dadeline</th>
                            <td>22 July 2022</td>
                        </tr>
                        <tr>
                            <th>Client phone</th>
                            <td>+1(098) 98 76 78</td>
                        </tr>
                        <tr>
                            <th>Files</th>
                            <td>dummy.xlx, hello.jpg , working_sheet.doc</td>
                        </tr>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Profile Modal  --}}

  <div class="modal fade" id="profile-edit-modal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('freelancer.profile.update') }}" method="post" enctype="multipart/form-data">
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
            $("#my-job-list-table, #payment-history-table, #freelancers-table").DataTable();
            
            $(document).on('click', '.btn-job-dtails', tenderDetails);
        });
    })(jQuery)

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

    function tenderDetails() {
        const el = $(this);
        const payload   = {
            tender_id : el.data('tender-id')
        }
        console.log(payload);
        $.ajax({
            type: "GET",
            url: "/api/get-tender-by-id",
            data: payload,
            dataType: "json",
            success(response) {
                console.log(response);
            }
        });
        $("#jobDetailsModal").modal('show');
    }

</script>

@endpush