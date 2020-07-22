
<!-- HOME -->
<div id="home">
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div class="home-wrap">
            <!-- home slick -->
            <div id="home-slick">
                <!-- banner -->
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                    <div class="banner banner-1">
                  <img src="<?php echo e(asset('uploads/slider/'.$slider->image)); ?>" width="650" height="489" alt="">
                  <div class="banner-caption text-center">
                      <h1><?php echo e($slider->name); ?></h1>
                      <h3 class="white-color font-weak">Up to 50% Discount</h3>
                      <button class="primary-btn"><?php echo e($slider->button_title); ?></button>
                  </div>
                </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- /banner -->

                
            </div>
            <!-- /home slick -->
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>
<!-- /HOME --><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/frontend/inc/home.blade.php ENDPATH**/ ?>