<?php
    use MoonShine\Filters\Filter;
    use MoonShine\Fields\Field;
    use MoonShine\Decorations\Decoration;
?>
<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldOrDecoration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($fieldOrDecoration instanceof Decoration): ?>
        <?php echo e($resource->renderComponent($fieldOrDecoration, $item), false); ?>

    <?php elseif(($fieldOrDecoration instanceof Filter && $fieldOrDecoration->isSee($item))
        || ($fieldOrDecoration instanceof Field && $fieldOrDecoration->canDisplayOnForm($item)
                && !$fieldOrDecoration->isResourceModeField())
    ): ?>
        <?php if($fieldOrDecoration->hasFieldContainer()): ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.field-container','data' => ['field' => $fieldOrDecoration,'item' => $item,'resource' => $resource]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::field-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fieldOrDecoration),'item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'resource' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($resource)]); ?>
                <?php echo e($resource->renderComponent($fieldOrDecoration, $item), false); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php else: ?>
            <?php echo e($resource->renderComponent($fieldOrDecoration, $item), false); ?>

        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/components/resource-renderable.blade.php ENDPATH**/ ?>