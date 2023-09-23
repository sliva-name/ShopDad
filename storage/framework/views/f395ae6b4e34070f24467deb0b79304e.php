<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.file','data' => ['attributes' => $element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ]),'files' => is_iterable($element->formViewValue($item)) ? $element->formViewValue($item) : [$element->formViewValue($item)],'removable' => $element->isRemovable(),'imageable' => true,'dir' => $element->getDir(),'path' => $element->path('')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ])),'files' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(is_iterable($element->formViewValue($item)) ? $element->formViewValue($item) : [$element->formViewValue($item)]),'removable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isRemovable()),'imageable' => true,'dir' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getDir()),'path' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->path(''))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/fields/image.blade.php ENDPATH**/ ?>