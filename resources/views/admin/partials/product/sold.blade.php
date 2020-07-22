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
                    <!-- basic form start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" style="text-align:center">All Products</h4>  
                                <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">qty</th>
                                            <th scope="col">category</th>
                                            <th scope="col">unit price</th>
                                            <th scope="col">stock</th>
                                            <th scope="col">sold</th>
                                            <th scope="col">Total Amount</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>3432</td>
                                            <td>watch</td>
                                            <td>235</td>
                                            <td>34235</td>
                                            <td>235</td>
                                            <td>54235</td>
                                            <td>
                                                <a href="#"> <i class="ti-trash"></i></a>
                                                <a href="#"> <i class="fa fa-pencil"></i></a>
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>3432</td>
                                            <td>watch</td>
                                            <td>235</td>
                                            <td>34235</td>
                                            <td>235</td>
                                            <td>54235</td>
                                            <td>
                                                <a href="#"> <i class="ti-trash"></i></a>
                                                <a href="#"> <i class="fa fa-pencil"></i></a>
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>3432</td>
                                            <td>watch</td>
                                            <td>235</td>
                                            <td>34235</td>
                                            <td>235</td>
                                            <td>54235</td>
                                            <td>
                                                <a href="#"> <i class="ti-trash"></i></a>
                                                <a href="#"> <i class="fa fa-pencil"></i></a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                            </div>
                        </div>
                    </div>
                    <!-- basic form end -->
                    
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
@section('script')
@include('admin.inc.allScripts')
@endsection