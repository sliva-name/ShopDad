<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name' => '',
    'id' => '',
    'label' => '',
    'beforeLabel' => false,
    'inLabel' => false,
    'beforeSlot',
    'afterSlot',
    'formName' => ''
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name' => '',
    'id' => '',
    'label' => '',
    'beforeLabel' => false,
    'inLabel' => false,
    'beforeSlot',
    'afterSlot',
    'formName' => ''
]); ?>
<?php foreach (array_filter(([
    'name' => '',
    'id' => '',
    'label' => '',
    'beforeLabel' => false,
    'inLabel' => false,
    'beforeSlot',
    'afterSlot',
    'formName' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div <?php echo e($attributes->merge(['class' => 'form-group moonshine-field'])
    ->only(['class', 'x-show']), false); ?>

     x-id="['input-wrapper']" :id="$id('input-wrapper')"
>
    <?php echo e($beforeLabel && !$inLabel ? $slot : '', false); ?>


    <?php if($label): ?>
        <?php if (isset($component)) { $__componentOriginalb1ab301d22b9d6823ac125a050b59817 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1ab301d22b9d6823ac125a050b59817 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.label','data' => ['for' => ''.e($attributes->get('id', $id), false).'','attributes' => $attributes->only('required')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => ''.e($attributes->get('id', $id), false).'','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->only('required'))]); ?>
            <?php echo e($beforeLabel && $inLabel ? $slot : '', false); ?>

            <?php echo $label; ?>

            <?php echo e(!$beforeLabel && $inLabel ? $slot : '', false); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1ab301d22b9d6823ac125a050b59817)): ?>
<?php $attributes = $__attributesOriginalb1ab301d22b9d6823ac125a050b59817; ?>
<?php unset($__attributesOriginalb1ab301d22b9d6823ac125a050b59817); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1ab301d22b9d6823ac125a050b59817)): ?>
<?php $component = $__componentOriginalb1ab301d22b9d6823ac125a050b59817; ?>
<?php unset($__componentOriginalb1ab301d22b9d6823ac125a050b59817); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php echo e($beforeSlot ?? '', false); ?>


    <?php echo e(!$beforeLabel && !$inLabel ? $slot : '', false); ?>


    <?php echo e($afterSlot ?? '', false); ?>


    <?php $__errorArgs = [$name, $formName];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php if (isset($component)) { $__componentOriginal8c392c2543387e7715c9099e7b7baca4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c392c2543387e7715c9099e7b7baca4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input-error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($message, false); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $attributes = $__attributesOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $component = $__componentOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__componentOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/form/input-wrapper.blade.php ENDPATH**/ ?>