<?php if (isset($component)) { $__componentOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.file','data' => ['attributes' => $element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ]),'files' => $element->getFullPathValues(),'raw' => is_iterable($value) ? $value : [$value],'removable' => $element->isRemovable(),'removableAttributes' => $element->getRemovableAttributes(),'imageable' => true,'names' => $element->resolveNames(),'itemAttributes' => $element->resolveItemAttributes()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ])),'files' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getFullPathValues()),'raw' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(is_iterable($value) ? $value : [$value]),'removable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isRemovable()),'removableAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getRemovableAttributes()),'imageable' => true,'names' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->resolveNames()),'itemAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->resolveItemAttributes())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7)): ?>
<?php $attributes = $__attributesOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7; ?>
<?php unset($__attributesOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7)): ?>
<?php $component = $__componentOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7; ?>
<?php unset($__componentOriginal1f062e0eb6b2ffa8e08ae7cfd90ffbf7); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/fields/image.blade.php ENDPATH**/ ?>