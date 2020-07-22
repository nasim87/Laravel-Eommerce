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
                   
                    <!-- basic form start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                  <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                                </div>
                                <?php endif; ?>
                                <h4 class="header-title" style="text-align:center">Add New Product</h4>
                                <form action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>
                                  <div class="row">
                                      <div class="col">
                                        <label>Product Name</label>
                                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" placeholder="Product Name">
                                      </div>
                                    </div>&nbsp;
                                    <div class="row">
                                      <div class="col">
                                        <label>Category</label>
                                        <select class="form-control" name="category_id" value="<?php echo e(old('category_id')); ?>">
                                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                      </div>
                                      <div class="col">
                                        <label for="">Sub Category</label>
                                        <select class="form-control" name="">
                                            
                                          
                                        </select>
                                      </div>
                                      <div class="col">
                                        <label for="">Select Brand</label>
                                        <select class="form-control" name="brand_id"  id="product_brand" value="">
                                          <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                      </div>
                                    </div>&nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Product Qty</label>
                                            <input type="text" name="quantity" value="<?php echo e(old('quantity')); ?>" class="form-control" placeholder="Product Qty">
                                          </div>
                                          <div class="col">
                                            <label>Product Code</label>
                                            <input type="text" name="code" value="<?php echo e(old('code')); ?>" class="form-control" placeholder="Product Code">
                                          </div>
                                          <div class="col">
                                            <label>Product Model</label>
                                            <input type="text" name="model" value="<?php echo e(old('model')); ?>" class="form-control" placeholder="Product Model">
                                          </div>
                                      </div>&nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Regular Price</label>
                                            <input type="text" name="r_price" value="<?php echo e(old('r_price')); ?>" class="form-control" placeholder="Regualr Price">
                                          </div>
                                          <div class="col">
                                            <label>Sale Price</label>
                                            <input type="text" name="price" value="<?php echo e(old('price')); ?>" class="form-control" placeholder="Price">
                                          </div>
                                      </div> &nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Product Description</label>
                                            <textarea name="description" value="<?php echo e(old('description')); ?>" id="summernote"></textarea>
                                          </div>
                                      </div> &nbsp;
                                      <div class="row">
                                          <div class="col">
                                            <label>Product Specification</label>
                                            <textarea name="specification" value="<?php echo e(old('specification')); ?>" id="summernote2"></textarea>
                                          </div>
                                      </div> &nbsp;
                                      <div class="row">
                                        <div class="col-6">
                                            <div id="myRepeatingFields">
                                                <div class="entry input-group col-xs-3">
                                                    <input class="form-control"   name="color[]" type="text" placeholder="Add Color" />
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-success btn-lg btn-add">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                </div>
                                            </div>
                                      </div>
                                      </div> &nbsp;
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text">Upload</span>
                                              </div>
                                              <div class="custom-file">
                                                  <input type="file"  name="images[]" multiple class="file" class="" id="inputGroupFile01">
                                                  <label class="custom-file-label"for="inputGroupFile01">Choose file</label>
                                              </div>
                                          </div>
                                        </div>
                                        </div> &nbsp;
                                        <div class="row">
                                          <div class="col">
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Product</button>
                                           
                                            
                                          </div>
                                          <div class="col">
                                            <a href="<?php echo e(route('product.index')); ?>" class="btn btn-danger btn-block">Cancel</a>
                                          </div>
                                        </div>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <!-- basic form end -->
                    
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
<?php $__env->startSection('script'); ?>
<?php echo $__env->make('admin.inc.allScripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/partials/product/create.blade.php ENDPATH**/ ?>