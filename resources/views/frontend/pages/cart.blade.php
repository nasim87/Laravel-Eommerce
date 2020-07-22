@extends('layouts.master')
	<!-- HEADER -->
	@section('content')
@include('frontend.inc.header')
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						@if($categories)
                        @foreach ($categories as $category ) 
						<li><a href="">{{$category->name}}</a></li>
						@endforeach
						@endif
						
						<li><a href="#">View All</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						@if($categories)
						@foreach ($categories as $category)  
						<li><a href="#">{{$category->name}}</a></li>
						@endforeach
						@endif
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">cart</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			<div class="col-md-9">
				<h1 class="text-center">Your Shopping Cart</h1><hr>
				
				@if(session()->has('success_message'))
					<div class="alert alert-success">
						{{session()->get('success_message')}}
					</div>
				@endif
				@if(count($errors) >0)
				<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error )
					<li>{{$error}}</li>
					</ul>
					@endforeach
			</div>
				@endif
				<div class="pull-right">
					<a href="{{route('shop.index')}}" class="btn btn-primary">Continue Shopping</a>
				</div>
				@if(Cart::count()>0)
				<h3>{{Cart::count()}} Item(s) in Shopping cart</h3>
				<table class="table table-striped ">
				<thead>
					<tr>
						<th>Remove Item:</th>
						<th>Product No:</th>
						<th>Product Image:</th>
						<th>Product Name</th>
						<th>Product Qty</th>
						<th>Unit Price</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@php
					 $i=0;
					@endphp
					@foreach (Cart::content() as $pdt )
					
					@php
					$product_images = explode('|',$pdt->model->images);
					$i++;
					@endphp
					<tr>
						<td>
						<form action="{{route('cart.saveForLater',$pdt->rowId)}}" method="POST">
						{{ csrf_field() }}
						<button type="submit" class="btn btn-outline-info btn-xs">Save for Later</button>

						</form>
						<form action="{{route('cart.destroy',$pdt->rowId)}}" method="POST">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
						</form>
						</td>
						<td width="10%">{{$i}}</td>
						<td>
							<img src="{{asset('uploads/products/'.$product_images[0])}}" width="40" height="40">
						</td>
						<td>{{$pdt->name}}</td>
						<td width="10%"><input type="number" class="form-control" value="{{$pdt->qty}}"name="qty"></td>
						<td>BDT {{ $pdt->model->price }}</td>
						<td>BDT  {{$pdt->total() }}</td>
						{{-- <td>{{ $pdt->qty*$item->model->price}}</td> --}}

					</tr>
					@endforeach
				
				</tbody>
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th></th>					
						<th></th>					
						<th></th>					
						<th>Total:</th>
						<th>BDT {{Cart::total()}}</th>
						
					</tr>
				</thead>
			</table>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<h3 class="text-center">Cart Summary</h3><hr>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Item Name:</th>
							<th> Amount BDT</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Total Shopping: </td>
							<td>BDT {{Cart::subtotal()}} </td>
							{{-- <td>BDT {{$pdt->subtotal() }}</td> --}}
						</tr>
						<tr>
							<td>Coupon Code: </td>
							<td>WINTER90</td>
						</tr>
						<tr>
							<td>Coupon Amount </td>
							<td>BDT 75</td>
						</tr>
						<tr>
							<td>Total Amount: </td>
							<td>BDT {{Cart::total()}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			</div>
			<div class="row">
				<div class="col-md-8 clearfix">
					<div class="pull-left">
						<div class="form-group">
						
						<input type="text" name="coupon" class="form-control">
						</div>
						<button class="btn btn-primary">Apply Coupon</button>
					</div>
				
					<div class="pull-right">
						<a href="{{route('checkout.index')}}" class="btn btn-success btn-lg" >Checkout</a>
					</div>
				
				</div>
				<!-- /row -->
			</div>
			@else
			<h4>No Item in Shopping Cart<h4>
			@endif
			<br>
		</div>
		<!-- /container -->
		<div class="container">
			<div class="row">
				<div class="col-bg-8 col-md-10">
			
				@if(Cart::instance('saveLater')->count()>0)
				<div class="well well-sm text-center text-warning">
					<span class="badge">
					{{Cart::instance('saveLater')->count()}} </span> Item(s) Saved for later
				</div>
				
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Remove Item:</th>
								<th>Product Image:</th>
								<th>Product Name</th>
								<th>Product Qty</th>
								<th>Unit Price</th>
							</tr>
						</thead>
						<tbody>
							@foreach (Cart::instance('saveLater')->content() as $item )
							@php $product_images = explode('|',$item->model->images);
							@endphp
							<tr>
								<td>
									<form action="{{route('saveLater.switchToCart',$item->rowId)}}" method="POST">
										{{ csrf_field() }}
										<button type="submit" class="btn btn-outline-info btn-xs">Move to Cart</button>
										</form>
									<form action="{{route('saveLater.destroy',$item->rowId)}}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
										</form>
								</td>
								<td>
									<img src="{{asset('uploads/products/'.$product_images[0])}}" width="40" height="40">
								</td>
								<td>{{$item->model->name}} </td>
								<td width="10%"><input type="number" class="form-control" value="{{$item->qty}}"name="qty"></td>
								<td>{{$item->model->price}} </td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@else
					<h4>No Items in saved for later</h4>
					@endif
				</div>
			</div>
		</div>
	</div>
	<!-- /section -->
	@include('frontend.inc.footer')
@endsection
