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
                                            <th scope="col">category</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Product Code</th>
                                            <th scope="col">qty</th>
                                            <th scope="col">unit price</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                     
                                          @foreach ($products as $product ) 
                                          <tr>
                                            <th scope="row">{{$product->id}}</th>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->category->name}}</td>
                                            <td>{{$product->brand->name}}</td>
                                            <td>{{$product->code}}</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                <form action="{{ route('product.destroy', $product->id ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-info"> <i class="fa fa-pencil"></i></a>
                                               <button class="btn btn-danger"> <i class="ti-trash"></i></button>

                                            </form>
                                            </td>
                                          </tr>
                                          @endforeach
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