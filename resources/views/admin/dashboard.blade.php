@extends('admin.layouts.app')
@section('content')
    

<!-- page container area start -->
<div class="page-container">
  @include('admin.inc.navigation')
  @include('admin.inc.content')

    <!-- footer area start-->
  @include('admin.inc.footer')
   
    <!-- footer area end-->
</div>
<!-- page container area end -->
<!-- offset area start -->
@include('admin.inc.offsetarea')
<!-- offset area end -->
@endsection