<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'files' => [],
    'raw' => [],
    'download' => false,
    'removable' => true,
    'removableAttributes' => null,
    'imageable' => true,
    'names' => null,
    'itemAttributes' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'files' => [],
    'raw' => [],
    'download' => false,
    'removable' => true,
    'removableAttributes' => null,
    'imageable' => true,
    'names' => null,
    'itemAttributes' => null,
]); ?>
<?php foreach (array_filter(([
    'files' => [],
    'raw' => [],
    'download' => false,
    'removable' => true,
    'removableAttributes' => null,
    'imageable' => true,
    'names' => null,
    'itemAttributes' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="form-group form-group-dropzone">
    <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'file','attributes' => $attributes->merge(['class' => 'form-file-upload'])->except(['id'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'file','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge(['class' => 'form-file-upload'])->except(['id']))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>

    <?php if(is_array($files) ? array_filter($files) : $files->isNotEmpty()): ?>
        <div class="dropzone">
            <div class="dropzone-items"
                 x-data="sortable"
                 data-handle=".dropzone-item"
            >
                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal6c8b25806c8ccaf231ccec2ce3dda174 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6c8b25806c8ccaf231ccec2ce3dda174 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.file-item','data' => ['attributes' => $attributes,'itemAttributes' => value($itemAttributes, $file, $index),'filename' => is_null($names) ? $file : value($names, $file, $index),'raw' => $raw[$index],'file' => $file,'download' => $download,'removable' => $removable,'removableAttributes' => $removableAttributes,'imageable' => $imageable]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.file-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'itemAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(value($itemAttributes, $file, $index)),'filename' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(is_null($names) ? $file : value($names, $file, $index)),'raw' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($raw[$index]),'file' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($file),'download' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($download),'removable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($removable),'removableAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($removableAttributes),'imageable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($imageable)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6c8b25806c8ccaf231ccec2ce3dda174)): ?>
<?php $attributes = $__attributesOriginal6c8b25806c8ccaf231ccec2ce3dda174; ?>
<?php unset($__attributesOriginal6c8b25806c8ccaf231ccec2ce3dda174); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6c8b25806c8ccaf231ccec2ce3dda174)): ?>
<?php $component = $__componentOriginal6c8b25806c8ccaf231ccec2ce3dda174; ?>
<?php unset($__componentOriginal6c8b25806c8ccaf231ccec2ce3dda174); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/form/file.blade.php ENDPATH**/ ?>