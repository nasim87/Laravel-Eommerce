<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
	
	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/slick-theme.css')); ?>" />
	
	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/nouislider.min.css')); ?>" />
	
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
	
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
		<script src="BKASH_SCRIPT_URL"></script> 

</head>
<body>
<?php echo $__env->yieldContent('content'); ?>

	<!--Bkash Integration-->
    <?php echo $__env->make('frontend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('extra-js'); ?>
	<!-- jQuery Plugins -->

	
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/nouislider.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.zoom.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="<?php echo e(asset('js/share.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Nasim Amjad\bboron\resources\views/layouts/master.blade.php ENDPATH**/ ?>