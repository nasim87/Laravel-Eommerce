    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="<?php echo e(asset('assets/admin/assets/images/icon/logo.png')); ?>" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><span>Dashboard</span></a>
                               
                                
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Category
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(route('category.create')); ?>">Create Category</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true">
                                        <i class="fa fa-cubes" aria-hidden="true"></i><span>Brands
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(route('brand.create')); ?>">Create New Brand</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Products</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(route('product.create')); ?>">Add New Product</a></li>
                                    <li><a href="<?php echo e(route('product.index')); ?>">All Products</a></li>
                                    <li><a href="<?php echo e(route('product.sold')); ?>">Sold Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Purchase</span></a>
                                <ul class="collapse">
                                    <li><a href="accordion.html">Products Input</a></li>
                                    <li><a href="grid.html">All Products</a></li>
                                    <li><a href="alert.html">Accounts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Slider
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(route('slider.create')); ?>">Create Slider</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Banner
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(route('banner.create')); ?>">Banner</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>Orders</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(route('order.pending')); ?>">Pending Orders</a></li>
                                    <li><a href="<?php echo e(route('order.confirm')); ?>">Approved Orders</a></li>
                                    <li><a href="<?php echo e(route('order.index')); ?>">All Orders</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a>
                                <ul class="collapse">
                                    <li><a href="#">All Users</a></li>
                                    <li><a href="#">New Users</a></li>
                                    <li><a href="#">Old Users</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i><span>Inventory</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Accounts</a></li>
                                </ul>
                            </li>
                        
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Reports</span></a>
                                <ul class="collapse">
                                    <li><a href="table-basic.html">Order</a></li>
                                    <li><a href="table-layout.html">Sales</a></li>
                                    <li><a href="table-layout.html">Inventory </a></li>
                                    <li><a href="table-layout.html">Accounts</a></li>
                                    <li><a href="datatable.html">Purchase</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Tables</span></a>
                                <ul class="collapse">
                                    <li><a href="table-basic.html">basic table</a></li>
                                    <li><a href="table-layout.html">table layout</a></li>
                                    <li><a href="datatable.html">datatable</a></li>
                                </ul>
                            </li>
                            <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                                <ul class="collapse">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login2.html">Login 2</a></li>
                                    <li><a href="login3.html">Login 3</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="register2.html">Register 2</a></li>
                                    <li><a href="register3.html">Register 3</a></li>
                                    <li><a href="register4.html">Register 4</a></li>
                                    <li><a href="screenlock.html">Lock Screen</a></li>
                                    <li><a href="screenlock2.html">Lock Screen 2</a></li>
                                    <li><a href="reset-pass.html">reset password</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                                    <span>Error</span></a>
                                <ul class="collapse">
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="403.html">Error 403</a></li>
                                    <li><a href="500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                        level menu</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#" aria-expanded="true">Item level (1)</a>
                                        <ul class="collapse">
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item level (1)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end --><?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/inc/navigation.blade.php ENDPATH**/ ?>