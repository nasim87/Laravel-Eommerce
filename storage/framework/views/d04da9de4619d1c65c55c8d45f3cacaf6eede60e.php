	<!-- HEADER -->
	<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
						<?php if($categories): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
						<li><a href=""><?php echo e($category->name); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						
						<li><a href="#">View All</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<?php if($categories): ?>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
						<li><a href="#"><?php echo e($category->name); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
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
				
				<?php if(session()->has('success_message')): ?>
					<div class="alert alert-success">
						<?php echo e(session()->get('success_message')); ?>

					</div>
				<?php endif; ?>
				<?php if(count($errors) >0): ?>
				<div class="alert alert-danger">
					<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					</ul>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
				<?php endif; ?>
				<div class="pull-right">
					<a href="<?php echo e(route('shop.index')); ?>" class="btn btn-primary">Continue Shopping</a>
				</div>
				<?php if(Cart::count()>0): ?>
				<h3><?php echo e(Cart::count()); ?> Item(s) in Shopping cart</h3>
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
					<?php
					 $i=0;
					?>
					<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<?php
					$product_images = explode('|',$pdt->model->images);
					$i++;
					?>
					<tr>
						<td>
						<form action="<?php echo e(route('cart.saveForLater',$pdt->rowId)); ?>" method="POST">
						<?php echo e(csrf_field()); ?>

						<button type="submit" class="btn btn-outline-info btn-xs">Save for Later</button>

						</form>
						<form action="<?php echo e(route('cart.destroy',$pdt->rowId)); ?>" method="POST">
						<?php echo e(csrf_field()); ?>

						<?php echo e(method_field('DELETE')); ?>

						<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
						</form>
						</td>
						<td width="10%"><?php echo e($i); ?></td>
						<td>
							<img src="<?php echo e(asset('uploads/products/'.$product_images[0])); ?>" width="40" height="40">
						</td>
						<td><?php echo e($pdt->name); ?></td>
						<td width="10%"><input type="number" class="form-control" value="<?php echo e($pdt->qty); ?>"name="qty"></td>
						<td>BDT <?php echo e($pdt->model->price); ?></td>
						<td>BDT  <?php echo e($pdt->total()); ?></td>
						

					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				</tbody>
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th></th>					
						<th></th>					
						<th></th>					
						<th>Total:</th>
						<th>BDT <?php echo e(Cart::total()); ?></th>
						
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
							<td>BDT <?php echo e(Cart::subtotal()); ?> </td>
							
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
							<td>BDT <?php echo e(Cart::total()); ?></td>
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
						<a href="<?php echo e(route('checkout.index')); ?>" class="btn btn-success btn-lg" >Checkout</a>
					</div>
				
				</div>
				<!-- /row -->
			</div>
			<?php else: ?>
			<h4>No Item in Shopping Cart<h4>
			<?php endif; ?>
			<br>
		</div>
		<!-- /container -->
		<div class="container">
			<div class="row">
				<div class="col-bg-8 col-md-10">
			
				<?php if(Cart::instance('saveLater')->count()>0): ?>
				<div class="well well-sm text-center text-warning">
					<span class="badge">
					<?php echo e(Cart::instance('saveLater')->count()); ?> </span> Item(s) Saved for later
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
							<?php $__currentLoopData = Cart::instance('saveLater')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php $product_images = explode('|',$item->model->images);
							?>
							<tr>
								<td>
									<form action="<?php echo e(route('saveLater.switchToCart',$item->rowId)); ?>" method="POST">
										<?php echo e(csrf_field()); ?>

										<button type="submit" class="btn btn-outline-info btn-xs">Move to Cart</button>
										</form>
									<form action="<?php echo e(route('saveLater.destroy',$item->rowId)); ?>" method="POST">
										<?php echo e(csrf_field()); ?>

										<?php echo e(method_field('DELETE')); ?>

										<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
										</form>
								</td>
								<td>
									<img src="<?php echo e(asset('uploads/products/'.$product_images[0])); ?>" width="40" height="40">
								</td>
								<td><?php echo e($item->model->name); ?> </td>
								<td width="10%"><input type="number" class="form-control" value="<?php echo e($item->qty); ?>"name="qty"></td>
								<td><?php echo e($item->model->price); ?> </td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
					<?php else: ?>
					<h4>No Items in saved for later</h4>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /section -->
	<?php echo $__env->make('frontend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/frontend/pages/cart.blade.php ENDPATH**/ ?>