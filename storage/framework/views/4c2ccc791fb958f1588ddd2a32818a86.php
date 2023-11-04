<!doctype html> <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"> <head> <meta charset="utf-8"> <meta
    name="viewport" content="width=device-width, initial-scale=1"> <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="<?php echo e(asset('')); ?>assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body>

<?php echo $__env->make('layouts/include/admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="layoutSidenav">
    <?php echo $__env->make('layouts/include/admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="layoutSidenav_content">
                <main>
                    <?php echo $__env->yieldContent('content'); ?>
                </main>

                <?php echo $__env->make('layouts/include/admin-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<script src="<?php echo e(asset('')); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('')); ?>assets/js/scripts.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_ferisoft\resources\views/layouts/master.blade.php ENDPATH**/ ?>