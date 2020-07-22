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
                <!-- table primary start -->
                <div class="col-lg-10 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">All Brands</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Order ID</th>
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Order Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                
                                                <tr>
                                                    <th scope="row"> #ID </th>
                                                    <td>54435ffdf </td>
                                                    <td>Karim</td>
                                                    <td>Chittagong, bangladesh</td>
                                                    <td>01815972794</td>
                                                    <td>Pending</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-xs">Details</a>
                                                        <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                                    </td>
                                                </tr>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/partials/order/index.blade.php ENDPATH**/ ?>