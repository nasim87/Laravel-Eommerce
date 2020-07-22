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
                    <!-- ASIDE -->
                    <div id="aside" class="col-md-3">
                        <!-- aside widget -->
                        <div class="aside">
                            <h3 class="aside-title">Shop by:</h3>
                            <ul class="filter-list">
                                <li><span class="text-uppercase">color:</span></li>
                                <li><a href="#" style="color:#FFF; background-color:#8A2454;">Camelot</a></li>
                                <li><a href="#" style="color:#FFF; background-color:#475984;">East Bay</a></li>
                                <li><a href="#" style="color:#FFF; background-color:#BF6989;">Tapestry</a></li>
                                <li><a href="#" style="color:#FFF; background-color:#9A54D8;">Medium Purple</a></li>
                            </ul>
    
                            <ul class="filter-list">
                                <li><span class="text-uppercase">Size:</span></li>
                                <li><a href="#">X</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
    
                            <ul class="filter-list">
                                <li><span class="text-uppercase">Price:</span></li>
                                <li><a href="#">MIN: $20.00</a></li>
                                <li><a href="#">MAX: $120.00</a></li>
                            </ul>
    
                            <ul class="filter-list">
                                <li><span class="text-uppercase">Gender:</span></li>
                                <li><a href="#">Men</a></li>
                            </ul>
    
                            <button class="primary-btn">Clear All</button>
                        </div>
                        <!-- /aside widget -->
    
                        <!-- aside widget -->
                        <div class="aside">
                            <h3 class="aside-title">Filter by Price</h3>
                            <div id="price-slider"></div>
                        </div>
                        <!-- aside widget -->
    
                        <!-- aside widget -->
                        <div class="aside">
                            <h3 class="aside-title">Filter By Color:</h3>
                            <ul class="color-option">
                                
                                <li><a href="#" style="background-color:#8A2454;"></a></li>
                                
                            </ul>
                        </div>
                        <!-- /aside widget -->
    
                        <!-- aside widget -->
                        <div class="aside">
                            <h3 class="aside-title">Filter By Size:</h3>
                            <ul class="size-option">
                                <li class="active"><a href="#">S</a></li>
                                <li class="active"><a href="#">XL</a></li>
                                <li><a href="#">SL</a></li>
                            </ul>
                        </div>
                        <!-- /aside widget -->
    
                        <!-- aside widget -->
                        <div class="aside">
                            <h3 class="aside-title">Filter by Brand</h3>
                            <ul class="list-links">
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Polo</a></li>
                                <li><a href="#">Lacost</a></li>
                            </ul>
                        </div>
                        <!-- /aside widget -->
    
                        <!-- aside widget -->
                        <div class="aside">
                            <h3 class="aside-title">Filter by Gender</h3>
                            <ul class="list-links">
                                <li class="active"><a href="#">Men</a></li>
                                <li><a href="#">Women</a></li>
                            </ul>
                        </div>
                        <!-- /aside widget -->
    
                        <!-- aside widget -->
                        <div class="aside">
                            <h3 class="aside-title">Top Rated Product</h3>
                            <!-- widget product -->
                            <div class="product product-widget">
                                <div class="product-thumb">
                                    <img src="<?php echo e(asset('assets/img/thumb-product01.jpg')); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /widget product -->
    
                            <!-- widget product -->
                            <div class="product product-widget">
                                <div class="product-thumb">
                                    <img src="<?php echo e(asset('img/thumb-product01.jpg')); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <h3 class="product-price">$32.50</h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /widget product -->
                        </div>
                        <!-- /aside widget -->
                    </div>
                    <!-- /ASIDE -->
    
                    <!-- MAIN -->
                    <div id="main" class="col-md-9">
                        <!-- store top filter -->
                        <div class="store-filter clearfix">
                            <div class="pull-left">
                                <div class="row-filter">
                                    <a href="#"><i class="fa fa-th-large"></i></a>
                                    <a href="#" class="active"><i class="fa fa-bars"></i></a>
                                </div>
                                <div class="sort-filter">
                                    <span class="text-uppercase">Sort By:</span>
                                    <select class="input">
                                            <option value="0">Position</option>
                                            <option value="0">Price</option>
                                            <option value="0">Rating</option>
                                        </select>
                                    <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="page-filter">
                                    <span class="text-uppercase">Show:</span>
                                    <select class="input">
                                            <option value="0">10</option>
                                            <option value="1">20</option>
                                            <option value="2">30</option>
                                        </select>
                                </div>
                                <ul class="store-pages">
                                    <li><span class="text-uppercase">Page:</span></li>
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /store top filter -->
    
                        <!-- STORE -->
                        <div id="store">
                            <!-- row -->
                            <div class="row">
                                <!-- Product Single -->
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="product product-single">
                                        <div class="product-thumb">
                                            <div class="product-label">
                                                <span>New</span>
                                                <span class="sale">-20%</span>
                                            </div>
                                            <?php 
                                            $product_image = explode('|',$product->images);
                                            ?>
                                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                            <img src="<?php echo e(asset('uploads/products/'.$product_image[0])); ?>" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$<?php echo e($product->price); ?> <del class="product-old-price">$<?php echo e($product->r_price); ?></del></h3>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o empty"></i>
                                            </div>
                                            <h2 class="product-name">
                                                <a href="<?php echo e(route('product.single',$product->id)); ?>"><?php echo e($product->name); ?></a></h2>
                                            <div class="product-btns">
                                                <form action="<?php echo e(route('cart.store',$product->id)); ?>" method="post">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                    
                                                <?php echo csrf_field(); ?>
                                                     <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                                    <input type="hidden" name="name" value="<?php echo e($product->name); ?>">
                                                    <input type="hidden" name="price" value="<?php echo e($product->price); ?>">
                                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                            </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- /Product Single -->
    
                               
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /STORE -->
    
                        <!-- store bottom filter -->
                        <div class="store-filter clearfix">
                            <div class="pull-left">
                                <div class="row-filter">
                                    <a href="#"><i class="fa fa-th-large"></i></a>
                                    <a href="#" class="active"><i class="fa fa-bars"></i></a>
                                </div>
                                <div class="sort-filter">
                                    <span class="text-uppercase">Sort By:</span>
                                    <select class="input">
                                            <option value="0">Position</option>
                                            <option value="0">Price</option>
                                            <option value="0">Rating</option>
                                        </select>
                                    <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="page-filter">
                                    <span class="text-uppercase">Show:</span>
                                    <select class="input">
                                            <option value="0">10</option>
                                            <option value="1">20</option>
                                            <option value="2">30</option>
                                        </select>
                                </div>
                                <ul class="store-pages">
                                    <li><span class="text-uppercase">Page:</span></li>
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /store bottom filter -->
                    </div>
                    <!-- /MAIN -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
        <!-- /section -->
     <?php echo $__env->make('frontend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/frontend/pages/shop.blade.php ENDPATH**/ ?>