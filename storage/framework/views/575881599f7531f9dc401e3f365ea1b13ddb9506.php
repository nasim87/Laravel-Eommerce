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
                <!-- Create Category start -->
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Create Category</h4>
                            <form method="Post" action="<?php echo e(route('category.store')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>                                    
                              <div class="form-group">
                                  <label for="category">Category Name: </label>
                                  <input type="text" name="name" class="form-control" id="brandName" aria-describedby="BrandName" placeholder="Enter Category Name">
                              </div>
                              <div class="form-group">
                                  <label for="category">Parent Category: </label>
                                  <select class="form-control" name="parent_id">
                                      <option></option>
                                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  name="image" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Category</button>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- End of Brand -->
                <!-- table primary start -->
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">All categories</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase bg-primary">
                                            <tr class="text-white">
                                                <th >#ID</th>
                                                <th>Name</th>
                                                
                                                <th>image</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($category->id); ?></td>
                                                <td><?php echo e($category->name); ?></td>
                                               
                                                
                                               
                                                <td>
                                                <img src="<?php echo e(asset('uploads/category/'.$category->image )); ?>"
                                                width="50" height="50" alt="image"></td>
                                                <td>
                                                <form action="<?php echo e(route('category.destroy',$category->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button class="btn btn-danger"> <i class="ti-trash"></i> </button>
                                                        <a  class="btn btn-info"href="<?php echo e(route('category.edit',$category->id)); ?>"><i class="fa fa-pencil"></i></a>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/partials/category/create.blade.php ENDPATH**/ ?>