<!doctype html>
<html>

<head>
    <title>(<?php echo $__env->yieldContent('title'); ?>)</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <link href="<?php echo e(asset('css/output.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('after-styles'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/neue-plak-webfont/neue-plak.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    <?php echo $__env->yieldContent('content'); ?>



    <?php echo $__env->yieldPushContent('after-script'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\ticketing\resources\views/layouts/app.blade.php ENDPATH**/ ?>