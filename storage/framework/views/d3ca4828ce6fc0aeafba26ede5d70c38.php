<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'file' => null,
    'raw' => null,
    'filename' => null,
    'download' => false,
    'removable' => true,
    'removableAttributes' => null,
    'imageable' => true,
    'itemAttributes',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'file' => null,
    'raw' => null,
    'filename' => null,
    'download' => false,
    'removable' => true,
    'removableAttributes' => null,
    'imageable' => true,
    'itemAttributes',
]); ?>
<?php foreach (array_filter(([
    'file' => null,
    'raw' => null,
    'filename' => null,
    'download' => false,
    'removable' => true,
    'removableAttributes' => null,
    'imageable' => true,
    'itemAttributes',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div
    <?php echo e($itemAttributes?->class(['x-removeable dropzone-item zoom-in', 'dropzone-item-file' => !$imageable]), false); ?>

    <?php if(is_null($itemAttributes)): ?>
    class="x-removeable dropzone-item zoom-in <?php if(!$imageable): ?> dropzone-item-file <?php endif; ?>"
    <?php endif; ?>
>
    <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'hidden','name' => 'hidden_' . $attributes->get('name'),'attributes' => $attributes->only(['data-level'])->merge([
            'data-name' => str($attributes->get('data-name'))
                ->replaceLast($attributes->get('data-column'), 'hidden_' . $attributes->get('data-column'))
                ->value()
        ]),'value' => $raw]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'hidden','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('hidden_' . $attributes->get('name')),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->only(['data-level'])->merge([
            'data-name' => str($attributes->get('data-name'))
                ->replaceLast($attributes->get('data-column'), 'hidden_' . $attributes->get('data-column'))
                ->value()
        ])),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($raw)]); ?>
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

    <?php if(!$imageable): ?>
        <?php echo $__env->make('moonshine::ui.file', [
            'value' => $file,
            'filename' => $filename ?? $file,
            'download' => $download
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($removable): ?>
        <button
            <?php echo e($removableAttributes?->merge([
                '@click.prevent' => '$event.target.closest(".x-removeable").remove()',
                'type' => 'button',
                'class' => 'dropzone-remove',
            ]), false); ?>

        >
            <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.x-mark'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $attributes = $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $component = $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
        </button>
    <?php endif; ?>

    <?php if($imageable): ?>
        <img src="<?php echo e($file, false); ?>"
             @click.stop="$dispatch('img-popup', {open: true, src: '<?php echo e($file, false); ?>' })"
             alt="<?php echo e($filename ?? '', false); ?>"
        />
    <?php endif; ?>
</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/form/file-item.blade.php ENDPATH**/ ?>