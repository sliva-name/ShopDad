<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>"
      x-data
      :class="$store.darkMode.on && 'dark'"
>
<head>
    <?php echo $__env->make('moonshine::layouts.shared.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo view('moonshine::layouts.shared.assets'); ?>
</head>
<?php echo e(moonshineLayout(), false); ?>

</html>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/layouts/app.blade.php ENDPATH**/ ?>