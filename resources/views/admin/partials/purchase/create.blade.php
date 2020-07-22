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
                                <form action="{{route('purchase.store')}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="row">
                                      <div class="col">
                                        <label>Product Name</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Product Name">
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
                                        {{-- <select class="form-control" name="">
                                            @foreach ($subcategories as $subcat )
                                            <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                                            @endforeach
                                          
                                        </select> --}}
                                      </div>
                                      <div class="col">
                                        <label for="">Invoice No:</label>
                                       <input name="invoice_no" value="{{old('invoice_no')}}" class="form-control">
                                      </div>
                                    </div>&nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Product Qty</label>
                                            <input type="text" name="qty" value="{{old('qty')}}" class="form-control" placeholder="Product Qty">
                                          </div>
                                          <div class="col">
                                            <label>Product Code</label>
                                            <input type="text" name="code" value="{{old('code')}}" class="form-control" placeholder="Product Code">
                                          </div>
                                          <div class="col">
                                            <label>Product Model</label>
                                            <input type="text" name="model" value="{{old('model')}}" class="form-control" placeholder="Product Model">
                                          </div>
                                      </div>&nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Regular Price</label>
                                            <input type="text" name="u_price" value="{{old('u_price')}}" class="form-control" placeholder="Regualr Price">
                                          </div>
                                          <div class="col">
                                            <label>Sale Price</label>
                                            <input type="text" name="t_price" value="{{old('t_price')}}" class="form-control" placeholder="Special Price">
                                          </div>
                                      </div> &nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Purchase Date:</label>
                                            <input type="text" name="purchase_date" value="{{old('purchase_date')}}" class="form-control" placeholder="Special Price">
                                          </div>
                                     
                                      </div> &nbsp;
                                      <div class="row">
                                        <div class="col-6">
                                            <div id="myRepeatingFields">
                                                <div class="entry input-group col-xs-3">
                                                    <input class="form-control"   name="color[]" type="text" placeholder="Add Color" />
                                                    <input class="form-control"   name="qty[]" type="text" placeholder="Add Color" />
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
                                            <div id="myRepeatingFields">
                                                <div class="entry input-group col-xs-3">
                                                    <input class="form-control"   name="size[]" type="text" placeholder="Add Color" />
                                                    <input class="form-control"   name="qty[]" type="text" placeholder="Add Color" />
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
                                                  <input type="file"  name="image"  id="inputGroupFile01">
                                                  <label class="custom-file-label"for="inputGroupFile01">choose file</label>
                                              </div>
                                          </div>
                                        </div>
                                        </div> &nbsp;
                                        <div class="row">
                                          <div class="col">
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Add Purchase Record</button>
                                           
                                            {{-- <button type="button" class="btn btn-success btn-block">Add New Product</button> --}}
                                          </div>
                                          <div class="col">
                                            <a href="{{route('purchase.index')}}" class="btn btn-danger">Cancel</a>
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