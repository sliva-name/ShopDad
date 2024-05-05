<?php if (isset($component)) { $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.select','data' => ['attributes' => $element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ]),'nullable' => $element->isNullable(),'searchable' => $element->isSearchable(),'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())]),'value' => $value,'values' => $element->values(),'customProperties' => $element->valuesWithProperties(onlyCustom: true),'asyncRoute' => $element->isAsyncSearch() ? $element->asyncSearchUrl() : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ])),'nullable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isNullable()),'searchable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isSearchable()),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())])),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->values()),'customProperties' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->valuesWithProperties(onlyCustom: true)),'asyncRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isAsyncSearch() ? $element->asyncSearchUrl() : null)]); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $attributes = $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $component = $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/fields/relationships/belongs-to.blade.php ENDPATH**/ ?>