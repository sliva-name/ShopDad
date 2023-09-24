<?php $__env->startSection('title', $code); ?>

<?php $__env->startSection('content'); ?>
    <!-- Error -->
    <div class="flex min-h-screen flex-col items-center justify-center gap-x-8 gap-y-8 py-8 px-4 md:flex-row lg:gap-x-12">
        <div class="shrink-0">
            <img src="<?php echo e(asset('vendor/moonshine/logo-small.svg'), false); ?>"
                 class="h-28 animate-wiggle xs:h-36 md:h-56 lg:h-60"
                 alt="MoonShine"
            />
        </div>
        <div class="text-center md:text-left">
            <div class="space-y-3">
                <h1 class="text-2xl font-bold leading-none text-white lg:text-3xl"><?php echo e($code, false); ?></h1>
                <h2 class="text-md font-semibold text-white md:text-lg lg:text-xl">Oops.</h2>
                <p class="text-2xs text-white md:text-xs"><?php echo e($message, false); ?></p>
            </div>
            <div class="mt-8">
                <a href="<?php echo e(route('moonshine.index'), false); ?>" class="btn btn-primary" rel="home">Back to Home</a>
            </div>
        </div>
    </div>
    <!-- END: Error -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('moonshine::layouts.blank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/errors/404.blade.php ENDPATH**/ ?>