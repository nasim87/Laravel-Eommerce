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
                            <h4 class="header-title">Create Slider</h4>
                            <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Slider Title: </label>
                                        <input type="text" name="name" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Slider Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Button Title: </label>
                                        <input type="text" name="button_title" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Button Title">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  name="image"class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Slider</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Brand -->
                <!-- table primary start -->
                <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">All Brands</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Slider Title</th>
                                                    <th scope="col">Button Title</th>
                                                    <th scope="col">Slider Image</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                   @foreach ($slider  as $slider )
                                                <tr>
                                                    <th scope="row"> {{$slider->id}} </th>
                                                    <td> {{$slider->name}} </td>
                                                    <td> {{$slider->button_title}} </td>
                                                    <td><img src="{{asset('uploads/slider/'.$slider->image)}}" alt="Image" width="60" height="60"></td>
                                                    <td>
                                                        <form action="{{ route('slider.destroy', $slider->id ) }}" method="POST">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                            <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-info"> <i class="fa fa-pencil"></i></a>
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
