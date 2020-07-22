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
                <!-- Create Category start -->
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Create Category</h4>
                            <form method="Post" action="{{route('category.store')}}" enctype="multipart/form-data">
                              @csrf                                    
                              <div class="form-group">
                                  <label for="category">Category Name: </label>
                                  <input type="text" name="name" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Category Name">
                              </div>
                              <div class="form-group">
                                  <label for="category">Parent Category: </label>
                                  <select class="form-control" name="parent_id">
                                      <option></option>
                                      @foreach ($categories as $category )
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  name="image" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Category</button>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- End of Brand -->
                <!-- table primary start -->
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">All categories</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase bg-primary">
                                            <tr class="text-white">
                                                <th >#ID</th>
                                                <th>Name</th>
                                                {{-- <th>Parent Category</th> --}}
                                                <th>image</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $categories as $category )
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                               
                                                {{-- <td>{{$category->parent_id}}</td>   --}}
                                               
                                                <td>
                                                <img src="{{asset('uploads/category/'.$category->image )}}"
                                                width="50" height="50" alt="image"></td>
                                                <td>
                                                <form action="{{route('category.destroy',$category->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"> <i class="ti-trash"></i> </button>
                                                        <a  class="btn btn-info"href="{{route('category.edit',$category->id)}}"><i class="fa fa-pencil"></i></a>
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
