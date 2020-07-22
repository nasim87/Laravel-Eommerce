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
                            <h4 class="header-title">Create Slider</h4>
                            <form action="<?php echo e(route('slider.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Slider Title: </label>
                                        <input type="text" name="name" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Slider Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Button Title: </label>
                                        <input type="text" name="button_title" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Button Title">
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
                                    
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Slider</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Brand -->
                <!-- table primary start -->
                <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">All Brands</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Slider Title</th>
                                                    <th scope="col">Button Title</th>
                                                    <th scope="col">Slider Image</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                   <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th scope="row"> <?php echo e($slider->id); ?> </th>
                                                    <td> <?php echo e($slider->name); ?> </td>
                                                    <td> <?php echo e($slider->button_title); ?> </td>
                                                    <td><img src="<?php echo e(asset('uploads/slider/'.$slider->image)); ?>" alt="Image" width="60" height="60"></td>
                                                    <td>
                                                        <form action="<?php echo e(route('slider.destroy', $slider->id )); ?>" method="POST">
                                                                <?php echo e(csrf_field()); ?>

                                                                <?php echo e(method_field('DELETE')); ?>

                                                            <a href="<?php echo e(route('slider.edit',$slider->id)); ?>" class="btn btn-info"> <i class="fa fa-pencil"></i></a>
                                                           <button class="btn btn-danger"> <i class="ti-trash"></i></button>

                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- table primary end -->
                <!-- Model start from here -->
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/partials/slider/slider.blade.php ENDPATH**/ ?>