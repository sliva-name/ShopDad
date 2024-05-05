<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'components' => []
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'components' => []
]); ?>
<?php foreach (array_filter(([
    'components' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldOrDecoration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(!isSeeWhenExists($fieldOrDecoration)) continue; ?>

    <?php if(is_field($fieldOrDecoration) && $fieldOrDecoration->hasWrapper()): ?>
        <?php if (isset($component)) { $__componentOriginal235f67923f05d9b0d0b555b07fb3c602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal235f67923f05d9b0d0b555b07fb3c602 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.field-container','data' => ['field' => $fieldOrDecoration]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::field-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fieldOrDecoration)]); ?>
            <?php echo is_field($fieldOrDecoration) ? $fieldOrDecoration->getBeforeRender() : ''; ?>

            <?php echo $fieldOrDecoration
                    ->{is_field($fieldOrDecoration) && $fieldOrDecoration->isForcePreview()
                        ? 'preview'
                        : 'render'}(); ?>

            <?php echo is_field($fieldOrDecoration) ? $fieldOrDecoration->getAfterRender() : ''; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal235f67923f05d9b0d0b555b07fb3c602)): ?>
<?php $attributes = $__attributesOriginal235f67923f05d9b0d0b555b07fb3c602; ?>
<?php unset($__attributesOriginal235f67923f05d9b0d0b555b07fb3c602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal235f67923f05d9b0d0b555b07fb3c602)): ?>
<?php $component = $__componentOriginal235f67923f05d9b0d0b555b07fb3c602; ?>
<?php unset($__componentOriginal235f67923f05d9b0d0b555b07fb3c602); ?>
<?php endif; ?>
    <?php else: ?>
        <?php echo is_field($fieldOrDecoration) ? $fieldOrDecoration->getBeforeRender() : ''; ?>

        <?php echo $fieldOrDecoration
                ->{is_field($fieldOrDecoration) && $fieldOrDecoration->isForcePreview()
                    ? 'preview'
                    : 'render'}(); ?>

        <?php echo is_field($fieldOrDecoration) ? $fieldOrDecoration->getAfterRender() : ''; ?>

    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/fields-group.blade.php ENDPATH**/ ?>