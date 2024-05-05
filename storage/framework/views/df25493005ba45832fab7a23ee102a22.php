<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label' => '',
    'centered' => false
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label' => '',
    'centered' => false
]); ?>
<?php foreach (array_filter(([
    'label' => '',
    'centered' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($label): ?>
    <div <?php echo e($attributes->class(['divider', 'divider-centered' => $centered]), false); ?>>
        <?php echo e($label, false); ?>

    </div>
<?php else: ?>
    <hr <?php echo e($attributes->class(['divider']), false); ?> />
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/divider.blade.php ENDPATH**/ ?>