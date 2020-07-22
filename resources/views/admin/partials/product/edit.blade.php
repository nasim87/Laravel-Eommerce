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
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                  <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                  </ul>
                                </div>
                                @endif
                                <h4 class="header-title" style="text-align:center">Add New Product</h4>
                                <form action="{{route('product.update',$products->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="row">
                                      <div class="col">
                                        <label>Product Name</label>
                                        <input type="text" name="name" value="{{old('name',$products->name)}}" class="form-control" placeholder="Product Name">
                                      </div>
                                    </div>&nbsp;
                                    <div class="row">
                                      <div class="col">
                                        <label>Category</label>
                                        <select class="form-control" name="category_id" value="{{old('category_id')}}">
                                          @foreach ($categories as $cat )
                                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      <div class="col">
                                        <label for="">Sub Category</label>
                                        <select class="form-control" name="parent_id">
                                          <option></option>
                                          {{-- @if($categories)
                                            @foreach ($categories as $cat )
                                            <option>{{$categories->name}}</option>
                                            @endforeach
                                            @endif --}}
                                        </select>
                                      </div>
                                      <div class="col">
                                        <label for="">Select Brand</label>
                                        <select class="form-control" name="brand_id"  value="">
                                          @foreach ($brands as $brand )
                                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>&nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Product Qty</label>
                                            <input type="text" name="quantity" value="{{old('quantity',$products->quantity)}}" class="form-control" placeholder="Product Qty">
                                          </div>
                                          <div class="col">
                                            <label>Product Code</label>
                                            <input type="text" name="code" value="{{old('code',$products->code)}}" class="form-control" placeholder="Product Code">
                                          </div>
                                          <div class="col">
                                            <label>Product Model</label>
                                            <input type="text" name="model" value="{{old('model',$products->model)}}" class="form-control" placeholder="Product Model">
                                          </div>
                                      </div>&nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Regular Price</label>
                                            <input type="text" name="r_price" value="{{old('r_price',$products->r_price)}}" class="form-control" placeholder="Regualr Price">
                                          </div>
                                          <div class="col">
                                            <label>Sale Price</label>
                                            <input type="text" name="s_price" value="{{old('s_price',$products->s_price)}}" class="form-control" placeholder="Special Price">
                                          </div>
                                      </div> &nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Product Description</label>
                                            <textarea name="description" value="{{$products->description}}" id="summernote"></textarea>
                                          </div>
                                      </div> &nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Product Specification</label>
                                            <textarea name="specification" value="{{$products->specification}}" id="summernote2"></textarea>
                                          </div>
                                      </div> &nbsp;
                                      <div class="row">
                                        <div class="col-6">
                                            <div id="myRepeatingFields">
                                                <div class="entry input-group col-xs-3">
                                                    <input class="form-control"  vlude="{{$products->color}}" name="color[]" type="text" placeholder="Add Color" />
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-success btn-lg btn-add">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                </div>
                                            </div>
                                      </div>
                                      </div> &nbsp;
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text">Upload</span>
                                              </div>
                                              <div class="custom-file">
                                                  <input type="file"  name="images[]" value="{{$products->images}}" multiple class="file" class="" id="inputGroupFile01">
                                                  <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                              </div>
                                          </div>
                                        </div>
                                        </div> &nbsp;
                                        <div class="row">
                                          <div class="col">
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Product</button>
                                           
                                            {{-- <button type="button" class="btn btn-success btn-block">Add New Product</button> --}}
                                          </div>
                                          <div class="col">
                                            <a href="{{route('product.index')}}" class="btn btn-danger btn-block">Cancel</a>
                                          </div>
                                        </div>
                                    </div>
                                  </form>
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