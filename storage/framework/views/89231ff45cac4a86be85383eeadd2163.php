<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

    <title><?php echo e(config('app.name', 'Laravel'), false); ?></title>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

</head>
<body class="font-sans antialiased">
<div class="min-h-full flex flex-col">
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="flex flex-1">
        <div class="container mx-auto">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

</body>
</html>
<?php /**PATH D:\OSPanel\domains\ShopDad\resources\views/layouts/shop.blade.php ENDPATH**/ ?>