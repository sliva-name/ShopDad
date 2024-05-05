<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions',
    'simple' => false
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions',
    'simple' => false
]); ?>
<?php foreach (array_filter(([
    'actions',
    'simple' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0 = $attributes; } ?>
<?php $component = MoonShine\Components\ActionGroup::resolve(['actions' => $actions] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\ActionGroup::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
        'flex-nowrap',
        'justify-end' => ! $simple,
        'justify-center' => $simple,
    ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $attributes = $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $component = $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/table/actions.blade.php ENDPATH**/ ?>