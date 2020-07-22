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
                            <h4 class="header-title">Create Banner</h4>
                            <form action="<?php echo e(route('banner.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Banner Name: </label>
                                    <input type="text" name="name" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Brand Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Button Title: </label>
                                    <input type="text" name="button_title" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Brand Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Offers: </label>
                                    <input type="text" name="offer" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Brand Name">
                                </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  name="image"class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Brand</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Brand -->
                <!-- Model start from here -->
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
        <!-- table primary start -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">All Banners</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-uppercase bg-primary">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Button Title</th>
                                            <th scope="col">Offers</th>
                                            <th scope="col">Image Title</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                        <?php if(count($banners) > 0 ): ?>
                                            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"> <?php echo e($banner->id); ?> </th>
                                            <td> <?php echo e($banner->name); ?> </td>
                                            <td> <?php echo e($banner->offer); ?> </td>
                                            <td> <?php echo e($banner->button_title); ?> </td>
                                            <td><img src="<?php echo e(asset('uploads/banner/'.$banner->image)); ?>" alt="Image" width="50" height="50"></td>
                                            <td>
                                                <form action="<?php echo e(route('banner.destroy', $banner->id )); ?>" method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>

                                                    <a href="<?php echo e(route('banner.edit',$banner->id)); ?>" class="btn btn-info"> <i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-danger"> <i class="ti-trash"></i></button>

                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- table primary end -->
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/partials/banner/create.blade.php ENDPATH**/ ?>