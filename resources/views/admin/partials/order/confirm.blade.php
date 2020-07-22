@extends('admin.layouts.app')
@section('content')
<!-- page container area start -->
<div class="page-container">
  @include('admin.inc.navigation')
 <!-- main content area start -->
 <div class="main-content">
    <!-- header area start -->
   @include('admin.inc.header')
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                <!-- table primary start -->
                <div class="col-lg-10 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">All Brands</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Order ID</th>
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Order Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                
                                                <tr>
                                                    <th scope="row"> #ID </th>
                                                    <td>54435ffdf </td>
                                                    <td>Karim</td>
                                                    <td>Chittagong, bangladesh</td>
                                                    <td>01815972794</td>
                                                    <td>Confirmed</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-xs">Details</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- table primary end -->
                <!-- Model start from here -->

      
     
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content area end -->

    <!-- footer area start-->
  @include('admin.inc.footer')
   
    <!-- footer area end-->
</div>
<!-- page container area end -->
<!-- offset area start -->
@include('admin.inc.offsetarea')
<!-- offset area end -->
@endsection
