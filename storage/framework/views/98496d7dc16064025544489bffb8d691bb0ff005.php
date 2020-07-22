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
				<li><a href="/index">Home</a></li>
				<li class="active">Checkout</li>
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
				<form id="checkout-form" method="POST" class="clearfix">
					<div class="col-md-6">
						<div class="billing-details">
							<p>Already a customer ? <a href="#">Login</a></p>
							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Create Account?</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
											<p>
												<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Shiping Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shiping -  $0.00</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Standard - $4.00</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
						</div>
						<?php if($message = Session::get('success')): ?>
						<div class="custom-alerts alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<?php echo $message; ?>

						</div>
						<?php Session::forget('success');?>
						<?php endif; ?>
						<?php if($message = Session::get('error')): ?>
						<div class="custom-alerts alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<?php echo $message; ?>

						</div>
						<?php Session::forget('error');?>
						<?php endif; ?>
						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2" checked>
								<label for="payments-2">Bkash Payment</label>
								<div class="caption">
									<button id="bKash_button" class="btn btn-primary">Pay with bKash</button>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" >
								<label for="payments-1">Direct Bank Transfer</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
										
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-4" >
								<label for="payments-4">Stripe Payment</label>
								<div class="caption">
									<script src="https://js.stripe.com/v3/"></script>

									<form action="/charge" method="post" id="payment-form">
										<div class="form-row">
										  <label for="card-element">
											Credit or debit card
										  </label>
										  <div id="card-element">
											<!-- A Stripe Element will be inserted here. -->
										  </div>
									  
										  <!-- Used to display Element errors. -->
										  <div id="card-errors" role="alert"></div>
										</div>
									  <?php echo csrf_field(); ?>
										<button>Submit Payment</button>
									  </form>
									
									
								</div>
							</div>
						
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Paypal Payment</label>
								<div class="caption">
									Stripe/Paypal/Payoneer Payemnt system
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
                                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php 
                                        $product_images=explode('|',$item->model->images);
                                        ?>
									<tr>
										<td class="thumb"><img src="<?php echo e(asset('uploads/products/'.$product_images[0])); ?>" alt=""></td>
										<td class="details">
											<a href="#"><?php echo e($item->model->name); ?></a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>BDT <?php echo e($item->model->price); ?></strong><br><del class="font-weak"><small>$40.00</small></del></td>
										<td class="qty text-center"><input class="input" type="number" value="<?php echo e($item->qty); ?>"></td>
                                        <td class="total text-center"><strong class="primary-color">BDT <?php echo e($item->subtotal()); ?></strong></td>
                                        <td class="text-right">
                                        <form action="<?php echo e(route('checkout.destroy',$item->rowId)); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                            <button class="main-btn icon-btn"><i class="fa fa-close"></i></button>
                                        </form>
										</td>
									</tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">BDT <?php echo e(Cart::subtotal()); ?></th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">BDT <?php echo e(Cart::total()); ?></th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button class="primary-btn">Place Order</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<?php $__env->startSection('extra-js'); ?>
	<script type="text/javascript">
			// Set your publishable key: remember to change this to your live publishable key in production
			// See your keys here: https://dashboard.stripe.com/account/apikeys
			var stripe = Stripe('pk_test_lbat73PZNjYNOGPn7Qnws79Z');
			var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: "#32325d",
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Create a token or display an error when the form is submitted.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}



		// Create a Stripe client.
		// var stripe = Stripe('pk_test_lbat73PZNjYNOGPn7Qnws79Z');
        //     // Create an instance of Elements.
        //     var elements = stripe.elements();
        //     // Custom styling can be passed to options when creating an Element.
        //     // (Note that this demo uses a wider set of styles than the guide below.)
        //     var style = {
        //       base: {
        //         color: '#32325d',
        //         fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        //         fontSmoothing: 'antialiased',
        //         fontSize: '16px',
        //         '::placeholder': {
        //           color: '#aab7c4'
        //         }
        //       },
        //       invalid: {
        //         color: '#fa755a',
        //         iconColor: '#fa755a'
        //       }
        //     };
        //     // Create an instance of the card Element.
        //     var card = elements.create('card', {style: style});
        //     // Add an instance of the card Element into the `card-element` <div>.
        //     card.mount('#card-element');
        //     // Handle real-time validation errors from the card Element.
        //     card.addEventListener('change', function(event) {
        //       var displayError = document.getElementById('card-errors');
        //       if (event.error) {
        //         displayError.textContent = event.error.message;
        //       } else {
        //         displayError.textContent = '';
        //       }
        //     });
        //     // Handle form submission.
        //     var form = document.getElementById('payment-form');
        //     form.addEventListener('submit', function(event) {
        //       event.preventDefault();
        //       stripe.createToken(card).then(function(result) {
        //         if (result.error) {
        //           // Inform the user if there was an error.
        //           var errorElement = document.getElementById('card-errors');
        //           errorElement.textContent = result.error.message;
        //         } else {
        //           // Send the token to your server.
        //           stripeTokenHandler(result.token);
        //         }
        //       });
        //     });
        //     // Submit the form with the token ID.
        //     function stripeTokenHandler(token) {
        //       // Insert the token ID into the form so it gets submitted to the server
        //       var form = document.getElementById('payment-form');
        //       var hiddenInput = document.createElement('input');
        //       hiddenInput.setAttribute('type', 'hidden');
        //       hiddenInput.setAttribute('name', 'stripeToken');
        //       hiddenInput.setAttribute('value', token.id);
        //       form.appendChild(hiddenInput);
        //       // Submit the form
        //       form.submit();
        //     }



		var paymentID = ''; 
bKash.init({ 
  paymentMode: 'checkout', //fixed value ‘checkout’ 
  //paymentRequest format: {amount: AMOUNT, intent: INTENT} 
  //intent options 
  //1) ‘sale’ – immediate transaction (2 API calls) 
  //2) ‘authorization’ – deferred transaction (3 API calls) 
  paymentRequest: { 
    amount: '100.50', //max two decimal points allowed 
    intent: 'sale' 
  }, 
  createRequest: function(request) { //request object is basically the paymentRequest object, automatically pushed by the script in createRequest method 
    $.ajax({ 
      url: 'MERCHANT_BACKEND_CREATE_API_CALLER_URL', 
      type: 'POST', 
      contentType: 'application/json',  
      success: function(data) { 
        data = JSON.parse(data);
        if (data && data.paymentID != null) { 
          paymentID = data.paymentID; 
          bKash.create().onSuccess(data); //pass the whole response data in bKash.create().onSucess() method as a parameter 
        } else { 
          bKash.create().onError(); 
        } 
      }, 
      error: function() { 
        bKash.create().onError(); 
      } 
    }); 
  },
  executeRequestOnAuthorization: function() { 
    $.ajax({ 
      url: 'MERCHANT_BACKEND_EXECUTE_API_CALLER_URL', 
      type: 'POST', 
      contentType: 'application/json', 
      data: JSON.stringify({ 
        "paymentID": paymentID 
      }), 
      success: function(data) { 
        data = JSON.parse(data);
        if (data && data.paymentID != null) { 
          window.location.href = "success.html";//Merchant’s success page 
        } else { 
          bKash.execute().onError(); 
        } 
      }, 
      error: function() { 
        bKash.execute().onError(); 
      } 
    }); 
  } 
});		
var id_token = '';
$.ajax({
	url: '{base_URL}/checkout/token/grant',
	type: 'POST',
	contentType: 'application/json',
	beforeSend: function(tokenRequest) {
		tokenRequest.setRequestHeader("username", "shared_name");
		tokenRequest.setRequestHeader("password", "shared_password");
	},
	data: JSON.stringify( { "app_key": "shared_app_key", "app_secret": "shared_app_secret" } ),
	success: function(data) {
    if (data && data.id_token != null) {
      id_token = data.id_token;
      $('#bKash_button').removeAttr('disabled');
    }
  }
});
HTTP/1.1 200 OK
Content-Type: application/json

{  
   "token_type": "Bearer",
   "id_token": "test_id_token_value"
   "expires_in": 3600,
   "refresh_token": "test_refresh_token_value"
}
		</script>
	<?php $__env->stopSection(); ?>

	<!-- /FOOTER -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/frontend/pages/checkout.blade.php ENDPATH**/ ?>