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
                <!-- Create Brand start -->
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Update Brand</h4><hr>
                            <h4 class="header-title" style="text-align:center;background:yellow; padding:10px;">{{$brand->name}}</h4>
                            <form action="{{route('brand.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf   
                                @method('PUT')
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Brand Name: </label>
                                        <input type="text" value="{{old('name',$brand->name)}}" name="name" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Brand Name">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  value="{{old('image',$brand->image)}}" name="image"class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Brand</button>
                                    <a href="{{route('brand.create')}}" class="btn btn-danger mt-4 pr-4 pl-4">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Brand -->
                 <!-- Create Brand start -->
                 <div class="col-lg-6 mt-5">
                    <div class="card">
                <img src="{{asset('uploads/brands/'.$brand->image)}}" alt="image" width="300" height="300">
                    </div>
                 </div>      
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
