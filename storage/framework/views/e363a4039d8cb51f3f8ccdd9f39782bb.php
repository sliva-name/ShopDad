<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'field',
    'beforeLabel' => false,
    'inLabel' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'field',
    'beforeLabel' => false,
    'inLabel' => false,
]); ?>
<?php foreach (array_filter(([
    'field',
    'beforeLabel' => false,
    'inLabel' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($field->isHidden()): ?>
    <div class="hidden"><?php echo e($slot, false); ?></div>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginalff540728867b4cd7521bc5f8ffcaf5b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff540728867b4cd7521bc5f8ffcaf5b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input-wrapper','data' => ['attributes' => $field->wrapperAttributes()
            ->merge(['required' => $field->attributes()->get('required')]),'label' => ''.e($field->label(), false).'','name' => ''.e($field->name(), false).'','id' => ''.e($field->id(), false).'','beforeLabel' => $field->isBeforeLabel(),'inLabel' => $field->isInLabel(),'formName' => $field->getFormName()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field->wrapperAttributes()
            ->merge(['required' => $field->attributes()->get('required')])),'label' => ''.e($field->label(), false).'','name' => ''.e($field->name(), false).'','id' => ''.e($field->id(), false).'','beforeLabel' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field->isBeforeLabel()),'inLabel' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field->isInLabel()),'formName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field->getFormName())]); ?>
        <?php if(!$field->isPreviewMode() && $field->hasLink()): ?>
             <?php $__env->slot('beforeSlot', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal1713db97e40aee9fd53e09cb830715f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1713db97e40aee9fd53e09cb830715f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.link-native','data' => ['icon' => 'heroicons.link','href' => $field->getLinkValue(),'target' => $field->isLinkBlank() ? '_blank' : '_self']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::link-native'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicons.link','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field->getLinkValue()),'target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field->isLinkBlank() ? '_blank' : '_self')]); ?>
                    <?php echo e($field->getLinkName(), false); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1713db97e40aee9fd53e09cb830715f7)): ?>
<?php $attributes = $__attributesOriginal1713db97e40aee9fd53e09cb830715f7; ?>
<?php unset($__attributesOriginal1713db97e40aee9fd53e09cb830715f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1713db97e40aee9fd53e09cb830715f7)): ?>
<?php $component = $__componentOriginal1713db97e40aee9fd53e09cb830715f7; ?>
<?php unset($__componentOriginal1713db97e40aee9fd53e09cb830715f7); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
        <?php endif; ?>

        <?php echo e($slot, false); ?>


        <?php if($field->getHint()): ?>
             <?php $__env->slot('afterSlot', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal590e607e39a00c9ea660dbfd829f3bd1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal590e607e39a00c9ea660dbfd829f3bd1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.hint','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.hint'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e($field->getHint(), false); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal590e607e39a00c9ea660dbfd829f3bd1)): ?>
<?php $attributes = $__attributesOriginal590e607e39a00c9ea660dbfd829f3bd1; ?>
<?php unset($__attributesOriginal590e607e39a00c9ea660dbfd829f3bd1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal590e607e39a00c9ea660dbfd829f3bd1)): ?>
<?php $component = $__componentOriginal590e607e39a00c9ea660dbfd829f3bd1; ?>
<?php unset($__componentOriginal590e607e39a00c9ea660dbfd829f3bd1); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff540728867b4cd7521bc5f8ffcaf5b4)): ?>
<?php $attributes = $__attributesOriginalff540728867b4cd7521bc5f8ffcaf5b4; ?>
<?php unset($__attributesOriginalff540728867b4cd7521bc5f8ffcaf5b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff540728867b4cd7521bc5f8ffcaf5b4)): ?>
<?php $component = $__componentOriginalff540728867b4cd7521bc5f8ffcaf5b4; ?>
<?php unset($__componentOriginalff540728867b4cd7521bc5f8ffcaf5b4); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/field-container.blade.php ENDPATH**/ ?>