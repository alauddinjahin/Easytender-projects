@extends('frontend.layouts.master')

@section('title', 'My Account')

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
                                <span>Pending Job</span>
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
                        <img src="{{asset('/backend/images/users/demo_user.webp')}}" class="img-thumbnail" alt="My Photo" >
                        <span><i class="fa fa-envelope fa-danger"> </i> example@gmail.com</span><br>
                        <span><i class="fa fa-phone fa-danger"> </i> 01910922069</span><br>
                        <span><i class="fa fa-map-marker fa-danger"> </i> Mirpur, Dhaka</span>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-uppercase display-6">Mr Anonimous User</span>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-profile-edit" data-bs-toggle="modal" data-bs-target="#profile-edit-modal"><i class="fa fa-pencil fa-danger"></i> </button>
                            </div>
                        </div>
                        <div class="line"></div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem temporibus suscipit inventore quidem? Libero, odit aliquid velit repudiandae optio tempore ea veniam rem, quibusdam natus quia dicta, provident impedit facere?</p>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>System Architect</td>
                                <td>Tiger Nixon</td>
                                <td>Edinburgh</td>
                                <td>610 BDT</td>
                                <td>2011-04-25</td>
                                <td>LTM</td>
                                <td>
                                    <a class="btn btn-danger btn-freelancers" data-bs-toggle="modal" href="#freelancerModalToggle" role="button">View Jobs & <br> Requirements</a>
                                    <a class="btn btn-danger btn-freelancers" data-bs-toggle="modal" href="#freelancerModalToggle" role="button">Start Job</a>
                                </td>
                            </tr>
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
  <div class="modal fade" id="freelancerModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Freelancers List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table id="freelancers-table" class="table table-striped nowrap">
                    <thead>
                        <tr class="text-center">
                            <th>JOb ID</th>
                            <th>User ID</th>
                            <th>Vat ID</th>
                            <th>Charge</th>
                            <th>Last Salling Date</th>
                            <th>Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>LTM</td>
                            <td> <button class="btn btn-danger" data-bs-target="#approvalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Approval</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="approvalModal" aria-hidden="true" aria-labelledby="approvalModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="approvalModal">Freelancer Approval</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="row mb-3">
                <label for="phone" class="col-md-3 col-form-label">Phone</label>
                <div class="col-md-9">
                  <input type="email" class="form-control" id="phone">
                </div>
            </div>
            <div class="row mb-3">
                <label for="file" class="col-md-3 col-form-label">File Upload</label>
                <div class="col-md-9">
                  <input type="file" multiple class="form-control" id="file">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger float-end">Submit</button>
                </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Profile Modal  --}}

  <!-- Modal -->
  <div class="modal fade" id="profile-edit-modal" data-bs-backdrop="static">
    
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="profile-edit-modal-label">Profile Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="name" class="col-form-label">Your Name:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control " id="name" placeholder="Type Your Name">
                        </div>
                    </div> 
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="email" class="col-form-label">Your Email:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="email" class="form-control " id="email" placeholder="test@example" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="phone" class="col-form-label">Your Phone:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="phone" class="form-control " id="phone" placeholder="Type Your Phone Number">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-3">
                            <label for="address" class="col-form-label">Your Address:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="address" class="form-control " id="address" placeholder="Type Your Address">
                        </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-custom">Update</button>
              </div>
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
            $("#my-job-list-table, #payment-history-table, #freelancers-table").DataTable();
            
            $(document).on('click', '.btn-freelancers', tenderDetails);
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
        // $("#freelancers-modal").modal('show');
    }

</script>

@endpush
