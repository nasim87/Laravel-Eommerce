<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo e(asset ( 'assets/admin/css/bootstrap.min.css ' )); ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo e(asset ( 'assets/admin/css/metisMenu.min.css ' )); ?>" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo e(asset ( 'assets/admin/css/timeline.css ' )); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo e(asset ( 'assets/admin/css/startmin.css ' )); ?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo e(asset ( 'assets/admin/css/morris.css ' )); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo e(asset ( 'assets/admin/css/font-awesome.min.css ' )); ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">

        <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo e(asset('assets/admin/js/jquery.min.js')); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo e(asset('assets/admin/js/bootstrap.min.js')); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo e(asset('assets/admin/js/metisMenu.min.js')); ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo e(asset('assets/admin/js/raphael.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/admin/js/morris.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/admin/js/morris-data.js')); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo e(asset('assets/admin/js/startmin.js')); ?>"></script>

    </body>
</html>
<?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>