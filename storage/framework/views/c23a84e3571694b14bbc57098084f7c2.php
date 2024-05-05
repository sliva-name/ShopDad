<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'key' => 'alert',
    'type' => 'info',
    'withToast' => true,
    'removable' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'key' => 'alert',
    'type' => 'info',
    'withToast' => true,
    'removable' => true,
]); ?>
<?php foreach (array_filter(([
    'key' => 'alert',
    'type' => 'info',
    'withToast' => true,
    'removable' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if(session()->has($key)): ?>
    <?php if (isset($component)) { $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be = $attributes; } ?>
<?php $component = MoonShine\Components\Alert::resolve(['removable' => $removable,'type' => $type] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e(session()->get($key), false); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $attributes = $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $component = $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
<?php endif; ?>

<?php if($withToast && $toast = session()->get('toast')): ?>
    <?php if (isset($component)) { $__componentOriginale0fb665341445bb696dc3b9e7c187fc3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0fb665341445bb696dc3b9e7c187fc3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.toast','data' => ['type' => $toast['type'],'content' => $toast['message']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::toast'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toast['type']),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toast['message'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0fb665341445bb696dc3b9e7c187fc3)): ?>
<?php $attributes = $__attributesOriginale0fb665341445bb696dc3b9e7c187fc3; ?>
<?php unset($__attributesOriginale0fb665341445bb696dc3b9e7c187fc3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0fb665341445bb696dc3b9e7c187fc3)): ?>
<?php $component = $__componentOriginale0fb665341445bb696dc3b9e7c187fc3; ?>
<?php unset($__componentOriginale0fb665341445bb696dc3b9e7c187fc3); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/layout/flash.blade.php ENDPATH**/ ?>