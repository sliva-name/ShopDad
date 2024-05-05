<?php if (isset($component)) { $__componentOriginal7bc1cd036eea3c64034c1dc802f52c33 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33 = $attributes; } ?>
<?php $component = MoonShine\Components\Breadcrumbs::resolve(['items' => collect($items)
        ->prepend(':::heroicons.outline.home', moonshineRouter()->home())
        ->toArray()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\Breadcrumbs::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33)): ?>
<?php $attributes = $__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33; ?>
<?php unset($__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bc1cd036eea3c64034c1dc802f52c33)): ?>
<?php $component = $__componentOriginal7bc1cd036eea3c64034c1dc802f52c33; ?>
<?php unset($__componentOriginal7bc1cd036eea3c64034c1dc802f52c33); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/layouts/shared/breadcrumbs.blade.php ENDPATH**/ ?>