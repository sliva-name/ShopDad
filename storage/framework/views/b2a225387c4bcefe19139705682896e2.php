<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'rows',
    'actions'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'rows',
    'actions'
]); ?>
<?php foreach (array_filter(([
    'rows',
    'actions'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<td colspan="<?php echo e(count($rows)+2, false); ?>"
    :class="$id('table-component') + '-bulkActions'"
>
    <div class="flex items-center gap-4">
        <?php if (isset($component)) { $__componentOriginalf9fe3ea351e3da6915d0427385e47546 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9fe3ea351e3da6915d0427385e47546 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.actions','data' => ['actions' => $actions]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9fe3ea351e3da6915d0427385e47546)): ?>
<?php $attributes = $__attributesOriginalf9fe3ea351e3da6915d0427385e47546; ?>
<?php unset($__attributesOriginalf9fe3ea351e3da6915d0427385e47546); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9fe3ea351e3da6915d0427385e47546)): ?>
<?php $component = $__componentOriginalf9fe3ea351e3da6915d0427385e47546; ?>
<?php unset($__componentOriginalf9fe3ea351e3da6915d0427385e47546); ?>
<?php endif; ?>
    </div>
</td>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/table/foot.blade.php ENDPATH**/ ?>