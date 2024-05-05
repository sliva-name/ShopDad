<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'data' => $_data ?? [],
    'top' => $isTop ?? false,
    'isScrollTo' => $isScrollTo ?? true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'data' => $_data ?? [],
    'top' => $isTop ?? false,
    'isScrollTo' => $isScrollTo ?? true,
]); ?>
<?php foreach (array_filter(([
    'data' => $_data ?? [],
    'top' => $isTop ?? false,
    'isScrollTo' => $isScrollTo ?? true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($data): ?>
    <ul <?php echo e($attributes->class(['menu-inner']), false); ?>

        <?php if(!$top && $isScrollTo): ?>
            x-init="$nextTick(() => document.querySelector('.menu-inner-item._is-active')?.scrollIntoView())"
        <?php endif; ?>
    >
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->isGroup()): ?>
                <?php if (isset($component)) { $__componentOriginal4f6a1cfae5a75510012f5aeed797a085 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4f6a1cfae5a75510012f5aeed797a085 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.menu.group','data' => ['item' => $item,'top' => $top]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::menu.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'top' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($top)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4f6a1cfae5a75510012f5aeed797a085)): ?>
<?php $attributes = $__attributesOriginal4f6a1cfae5a75510012f5aeed797a085; ?>
<?php unset($__attributesOriginal4f6a1cfae5a75510012f5aeed797a085); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f6a1cfae5a75510012f5aeed797a085)): ?>
<?php $component = $__componentOriginal4f6a1cfae5a75510012f5aeed797a085; ?>
<?php unset($__componentOriginal4f6a1cfae5a75510012f5aeed797a085); ?>
<?php endif; ?>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.menu.item','data' => ['item' => $item,'top' => $top]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'top' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($top)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c)): ?>
<?php $attributes = $__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c; ?>
<?php unset($__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c)): ?>
<?php $component = $__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c; ?>
<?php unset($__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c); ?>
<?php endif; ?>
            <?php endif; ?>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<?php echo e($slot ?? '', false); ?>

<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/menu/index.blade.php ENDPATH**/ ?>