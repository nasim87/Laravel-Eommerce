<?php $__env->startSection('content'); ?>
<!-- HEADER -->
<?php echo $__env->make('frontend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /HEADER -->
	<!-- NAVIGATION -->
    <?php echo $__env->make('frontend.inc.singleNavigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- /NAVIGATION -->
	<!-- BREADCRUMB -->
    <?php echo $__env->make('frontend.inc.sProbcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!--  Product Details -->
                    <div class="product product-details clearfix">
                        <div class="col-md-6">
                            <div id="product-main-view">
                                <?php   
                                    $product_images=explode('|',$product->images)
                                    ?>
                                <?php $__currentLoopData = $product_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product-view">
                                    <img src="<?php echo e(asset('uploads/products/'.$image)); ?>" alt="">
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                
                            </div>
                            <div id="product-view">
                                <?php $__currentLoopData = $product_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product-view">
                                    <img src="<?php echo e(asset('uploads/products/'.$image)); ?>" alt="">
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-body">
                                <div class="product-label">
                                    <span>New</span>
                                    <span class="sale">-20%</span>
                                </div>
                                <h2 class="product-name"><?php echo e($product->name); ?></h2>
                                <h3 class="product-price">$<?php echo e($product->presentPrice()); ?> <del class="product-old-price">$<?php echo e($product->r_price); ?></del></h3>
                                <div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <a href="#">3 Review(s) / Add Review</a>
                                </div>
                                <p><strong>Availability:</strong> In Stock</p>
                                <p><strong>Brand:</strong> <?php echo e($product->brand->name); ?></p>
                                <p><?php echo strip_tags($product->description); ?></p>
                                         <div class="product-options">
                                    <ul class="size-option">
                                        <li><span class="text-uppercase">Size:</span></li>
                                        <li class="active"><a href="#">S</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">SL</a></li>
                                    </ul>
                                    <ul class="color-option">

                                        <li><span class="text-uppercase">Color:</span></li>
                                       <?php $allColors=explode('|',$product->color);
                                       ?>
                                       <?php $__currentLoopData = $allColors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li> <?php echo e($color); ?></li>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        
                                    </ul>
                                </div>
    
                                <div class="product-btns">
                                    
                                    <?php if($product->quantity >0): ?>
                                    <form action="<?php echo e(route('cart.store',$product->id)); ?>" method="post">
                                            <div class="qty-input">
                                                <span class="text-uppercase">QTY: </span>
                                                <input class="input" name="qty" type="number" placeholder="1">
                                            </div>
                                        <?php echo csrf_field(); ?>
                                             <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                            <input type="hidden" name="name" value="<?php echo e($product->name); ?>">
                                            <input type="hidden" name="price" value="<?php echo e($product->price); ?>">
                                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    </form>
                                    <?php endif; ?>
                                    <div class="pull-right">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                          
                                        
                                    </div>
                                </div>
                                <div class="pull-left">
                                            <?php 
                                            echo Share::page('http://127.0.0.1:8000/single/'."{$product->id}",  'BBORON')
                                            ->linkedin()
                                            ->whatsapp()
                                            ->pinterest()
                                            ->twitter()
                                            ->facebook();
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="product-tab">
                                <ul class="tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Details</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab1" class="tab-pane fade in active">
                                        <p><?php echo strip_tags($product->description)?>.</p>
                                    </div>
                                    <div id="tab2" class="tab-pane fade in">
    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="product-reviews">
                                                    <div class="single-review">
                                                        <div class="review-heading">
                                                            <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                            <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                            <div class="review-rating pull-right">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o empty"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-body">
                                                            <p><?php echo strip_tags($product->specification)?>.</p>
                                                        </div>
                                                    </div>
    
                                                    <div class="single-review">
                                                        <div class="review-heading">
                                                            <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                            <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                            <div class="review-rating pull-right">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o empty"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                        </div>
                                                    </div>
    
                                                    <div class="single-review">
                                                        <div class="review-heading">
                                                            <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                            <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                            <div class="review-rating pull-right">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o empty"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                        </div>
                                                    </div>
    
                                                    <ul class="reviews-pages">
                                                        <li class="active">1</li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="text-uppercase">Write Your Review</h4>
                                                <p>Your email address will not be published.</p>
                                                <form class="review-form">
                                                    <div class="form-group">
                                                        <input class="input" type="text" placeholder="Your Name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="input" type="email" placeholder="Email Address" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="input" placeholder="Your review"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-rating">
                                                            <strong class="text-uppercase">Your Rating: </strong>
                                                            <div class="stars">
                                                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="primary-btn">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <!-- /Product Details -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
    
        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Picked For You</h2>
                        </div>
                    </div>
                    <!-- section title -->
    
                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="<?php echo e(asset('assets/img/product04.jpg')); ?>" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
    
                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>New</span>
                                </div>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="<?php echo e(asset('assets/img/product03.jpg')); ?>" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
    
                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span class="sale">-20%</span>
                                </div>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="<?php echo e(asset('assets/img/product02.jpg')); ?>" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
    
                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>New</span>
                                    <span class="sale">-20%</span>
                                </div>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="<?php echo e(asset('assets/img/product01.jpg')); ?>" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
     <?php echo $__env->make('frontend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/frontend/pages/single.blade.php ENDPATH**/ ?>