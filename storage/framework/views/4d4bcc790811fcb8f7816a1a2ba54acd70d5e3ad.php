<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auction.lk</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/bootstrap4/bootstrap.min.css')); ?>">
    <link href="<?php echo e(URL :: asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/slick-1.8.0/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/main_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/responsive.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/home.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/serp-4b31d6.css')); ?>">

</head>

<body>

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(URL :: asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('styles/bootstrap4/popper.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('styles/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/TweenMax.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/TimelineMax.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/scrollmagic/ScrollMagic.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/animation.gsap.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/ScrollToPlugin.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/slick-1.8.0/slick.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/easing/easing.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('js/custom.js')); ?>"></script>

</body>

</html>


<?php /**PATH C:\project\auction.lk\resources\views/welcome.blade.php ENDPATH**/ ?>