<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'size' => 'sm',
    'color' => '',
    'fixed' => false,
    'absolute' => false
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'size' => 'sm',
    'color' => '',
    'fixed' => false,
    'absolute' => false
]); ?>
<?php foreach (array_filter(([
    'size' => 'sm',
    'color' => '',
    'fixed' => false,
    'absolute' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->class([
    'spinner',
    "spinner-$size" => $size,
    "spinner--$color" => $color,
    'spinner-fixed' => $fixed,
    'spinner-absolute' => $absolute
]), false); ?>></div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/spinner.blade.php ENDPATH**/ ?>