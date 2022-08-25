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
                <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
                <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
            </div>
            <br>
            <div class="grid">

                <div class="row">
                    <div class="column" style="background-color:#aaa;">
                        <h2>Column 1</h2>
                        <p>Some text..</p>
                    </div>
                    <div class="column" style="background-color:#bbb;">
                        <h2>Column 2</h2>
                        <p>Some text..</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="column" style="background-color:#ccc;">
                        <h2>Column 3</h2>
                        <p>Some text..</p>
                    </div>
                    <div class="column" style="background-color:#ddd;">
                        <h2>Column 4</h2>
                        <p>Some text..</p>
                    </div>
            </div>
            </div>
        </div>
    </div>
<!-- end content -->
    
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom.css')}}">
@endpush

@push('js')
    <script>
        // Get the elements with class="column"
        var elements = document.getElementsByClassName("column");

        // Declare a loop variable
        var i;

        // List View
        function listView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "100%";
        }
        }

        // Grid View
        function gridView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "50%";
        }
        }

        /* Optional: Add active class to the current button (highlight it) */
        var container = document.getElementById("btnContainer");
        var btns = container.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }
    </script>
@endpush