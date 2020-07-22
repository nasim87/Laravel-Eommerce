<?php $__env->startSection('content'); ?>
<!-- page container area start -->
<div class="page-container">
  <?php echo $__env->make('admin.inc.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- main content area start -->
 <div class="main-content">
    <!-- header area start -->
   <?php echo $__env->make('admin.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                <!-- Create Brand start -->
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Update Brand</h4><hr>
                            <h4 class="header-title" style="text-align:center;background:yellow; padding:10px;"><?php echo e($brand->name); ?></h4>
                            <form action="<?php echo e(route('brand.update',$brand->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>   
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Brand Name: </label>
                                        <input type="text" value="<?php echo e(old('name',$brand->name)); ?>" name="name" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Brand Name">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  value="<?php echo e(old('image',$brand->image)); ?>" name="image"class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Brand</button>
                                    <a href="<?php echo e(route('brand.create')); ?>" class="btn btn-danger mt-4 pr-4 pl-4">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Brand -->
                 <!-- Create Brand start -->
                 <div class="col-lg-6 mt-5">
                    <div class="card">
                <img src="<?php echo e(asset('uploads/brands/'.$brand->image)); ?>" alt="image" width="300" height="300">
                    </div>
                 </div>      
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content area end -->

    <!-- footer area start-->
  <?php echo $__env->make('admin.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <!-- footer area end-->
</div>
<!-- page container area end -->
<!-- offset area start -->
<?php echo $__env->make('admin.inc.offsetarea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- offset area end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/partials/brand/edit.blade.php ENDPATH**/ ?>