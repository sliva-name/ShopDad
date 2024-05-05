<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'h' => 1
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'h' => 1
]); ?>
<?php foreach (array_filter(([
    'h' => 1
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<h<?php echo e($h, false); ?> <?php echo e($attributes->merge(['class' => 'truncate text-md font-medium']), false); ?>>
    <?php echo e($slot, false); ?>

</h<?php echo e($h, false); ?>>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/title.blade.php ENDPATH**/ ?>