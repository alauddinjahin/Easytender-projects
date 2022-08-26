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
                    <div class="col-md-6 py-3">
                        <div class="card">
                            <div class="card-header text-center text-uppercase h3">
                                <span>Offered Job</span>
                            </div>
                            <div class="card-body display-5">
                                Total: 6543
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="card">
                            <div class="card-header text-center text-uppercase h3">
                                <span>Completed Job</span>
                            </div>
                            <div class="card-body display-5">
                                Total: 654
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="card">
                            <div class="card-header text-center text-uppercase h3">
                                <span>Pending Job</span>
                            </div>
                            <div class="card-body display-5">
                                Total: 35
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabcontent col-9" id="my-profile" >
                <div class="row profile-content py-2">
                    <div class="col-md-3 profile-image" >
                        <img src="{{asset('/backend/images/users/demo_user.webp')}}" class="img-thumbnail" alt="My Photo" >
                        <span><i class="fa fa-envelope"> </i> example@gmail.com</span><br>
                        <span><i class="fa fa-phone"> </i> 01910922069</span><br>
                        <span><i class="fa fa-map-marker"> </i> Mirpur, Dhaka</span>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-uppercase display-6">Mr Anonimous User</span>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-profile-edit" data-bs-toggle="modal" data-bs-target="#profile-edit-modal"><i class="fa fa-pencil"></i> </button>
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
                            <tr>
                                <th>JOb ID</th>
                                <th>User ID</th>
                                <th>Vat ID</th>
                                <th>Service Charge</th>
                                <th>Last Salling Date</th>
                                <th>Method</th>
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
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009-01-12</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012-03-29</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008-11-28</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012-12-02</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012-08-06</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010-10-14</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009-09-15</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008-12-13</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008-12-19</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013-03-03</td>
                                <td>LTM</td>
                            </tr>
                         
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009-04-10</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012-10-13</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012-09-26</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011-09-03</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009-06-25</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011-12-12</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sydney</td>
                                <td>23</td>
                                <td>2010-09-20</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009-10-09</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010-12-22</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010-11-14</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011-06-07</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010-03-11</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011-08-14</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sydney</td>
                                <td>37</td>
                                <td>2011-06-02</td>
                                <td>LTM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 

            <div class="tabcontent col-9" id="payment-history">
                <div class="table-responsive">
                    <table id="payment-history-table" class="table table-striped nowrap">
                        <thead>
                            <tr >
                                <th>SL No</th>
                                <th>User</th>
                                <th>Vat</th>
                                <th> Charge</th>
                                <th>Salling Date</th>
                                <th>Comments</th>
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
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009-01-12</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012-03-29</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008-11-28</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012-12-02</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012-08-06</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010-10-14</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009-09-15</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008-12-13</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008-12-19</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013-03-03</td>
                                <td>LTM</td>
                            </tr>
                         
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009-04-10</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012-10-13</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012-09-26</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011-09-03</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009-06-25</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011-12-12</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sydney</td>
                                <td>23</td>
                                <td>2010-09-20</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009-10-09</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010-12-22</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010-11-14</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011-06-07</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010-03-11</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011-08-14</td>
                                <td>LTM</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sydney</td>
                                <td>37</td>
                                <td>2011-06-02</td>
                                <td>LTM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


  
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
<!-- end content -->
    
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/vendor/datatable/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/user-dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom.css')}}">
    <style>
        ..summery-card{
  background-color: #f48696 !important;
}a{}
    </style>
@endpush

@push('js')
<script src="{{ asset('frontend/vendor/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('frontend/custom.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#my-job-list-table, #payment-history-table").DataTable();
    });
        
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

</script>

@endpush
