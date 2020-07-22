<!-- section -->
<div class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- banner -->
            <div class="col-md-8">
                <?php $__currentLoopData = $hotDeals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotdeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <div class="banner banner-1">
                    <img src="<?php echo e(asset('uploads/banner/'.$hotdeal->image)); ?>" width="750" height="563" alt="">
                    <div class="banner-caption text-center">
                        <h1 class="primary-color"><?php echo e($hotdeal->name); ?><br><span class="white-color font-weak"><?php echo e($hotdeal->offer); ?></span></h1>
                        <button class="primary-btn"><?php echo e($hotdeal->button_title); ?></button>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /banner -->
            <!-- banner -->
            <?php $__currentLoopData = $hotDealsTwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotTwo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div class="col-md-4 col-sm-6">
                <a class="banner banner-1" href="#">
                    <img src="<?php echo e(asset('uploads/banner/'.$hotTwo->image)); ?>" width="360" height="270" alt="">
                    <div class="banner-caption text-center">
                        <h2 class="white-color"><?php echo e($hotTwo->name); ?></h2>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /banner -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section --><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/frontend/inc/hotdeal.blade.php ENDPATH**/ ?>