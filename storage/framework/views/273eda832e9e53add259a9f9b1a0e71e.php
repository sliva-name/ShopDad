<div x-id="['has-many']"
     :id="$id('has-many')"
>
    <?php if($element->isCreatable()): ?>
        <?php if (isset($component)) { $__componentOriginal5b3523037f393515dbb12b0b2c7450ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $attributes = $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $component = $__componentOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>

        <?php echo $element->createButton(); ?>

    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal5b3523037f393515dbb12b0b2c7450ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $attributes = $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $component = $__componentOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>

    <?php echo e($table->render(), false); ?>

</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/fields/relationships/has-many.blade.php ENDPATH**/ ?>