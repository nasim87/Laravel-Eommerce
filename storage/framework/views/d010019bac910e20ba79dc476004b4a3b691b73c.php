<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - Ecommerce Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/admin/assets/images/icon/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/metisMenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/slicknav.min.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/typography.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/default-css.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/responsive.css')); ?>">
   
    <!-- modernizr css -->
    <script src="<?php echo e(asset('assets/admin/assets/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
</head>

<body>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('script'); ?>
    <!-- jquery latest version -->
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 200
        });
        $('#summernote2').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 200
        });
    </script>

       
    <script src="<?php echo e(asset('assets/admin/assets/js/vendor/jquery-2.2.4.min.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo e(asset('assets/admin/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/assets/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/assets/js/jquery.slimscroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/assets/js/jquery.slicknav.min.js')); ?>"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="<?php echo e(asset('assets/admin/assets/js/line-chart.js')); ?>"></script>
    <!-- all bar chart activation -->
    <script src="<?php echo e(asset('assets/admin/assets/js/bar-chart.js')); ?>"></script>
    <!-- all pie chart -->
    <script src="<?php echo e(asset('assets/admin/assets/js/pie-chart.js')); ?>"></script>
    <!-- others plugins -->
    <script src="<?php echo e(asset('assets/admin/assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/assets/js/scripts.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>