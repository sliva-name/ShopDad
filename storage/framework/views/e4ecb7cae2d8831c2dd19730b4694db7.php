<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'extensions' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'extensions' => null,
]); ?>
<?php foreach (array_filter(([
    'extensions' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($extensions && $extensions->isNotEmpty()): ?>
    <div <?php echo e($attributes->merge(['class' => 'form-group form-group-expansion']), false); ?>

         x-init="<?php echo trim($extensions->implode(fn($extension) => $extension->xInit()->implode(';'), ';'), ';'); ?>"
         x-data="{ <?php echo trim($extensions->implode(fn($extension) => $extension->xData()->implode(','), ','), ','); ?> }"
    >
        <?php echo e($slot, false); ?>


        <?php $__currentLoopData = $extensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($extension->render(), false); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <?php echo e($slot, false); ?>

<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/form/input-extensions.blade.php ENDPATH**/ ?>