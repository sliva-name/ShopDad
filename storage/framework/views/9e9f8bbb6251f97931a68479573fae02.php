<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'fields',
    'actions',
    'rows',
    'asyncUrl' => null,
    'preview' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'fields',
    'actions',
    'rows',
    'asyncUrl' => null,
    'preview' => false,
]); ?>
<?php foreach (array_filter(([
    'fields',
    'actions',
    'rows',
    'asyncUrl' => null,
    'preview' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(!$preview && $actions->isNotEmpty()): ?>
    <th class="w-10 text-center">
        <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'checkbox','autocomplete' => 'off','@change' => 'actions(\'all\', $id(\'table-component\'))','class' => 'actionsAllChecked',':class' => '$id(\'table-component\') + \'-actionsAllChecked\'','value' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'checkbox','autocomplete' => 'off','@change' => 'actions(\'all\', $id(\'table-component\'))','class' => 'actionsAllChecked',':class' => '$id(\'table-component\') + \'-actionsAllChecked\'','value' => '1']); ?>
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
    </th>
<?php endif; ?>

<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <th>
        <?php if(!$preview && $field->isSortable()): ?>
            <a href="<?php echo e($field->sortQuery($asyncUrl), false); ?>" <?php if(!is_null($asyncUrl)): ?>@click.prevent="asyncRequest" <?php endif; ?> class="flex items-baseline gap-x-1">
                <?php echo e($field->label(), false); ?>

                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" fill-opacity="<?php echo e($field->sortDirection('asc') && $field->sortActive() ? '1' : '.4', false); ?>" d="m11.47,4.72a0.75,0.75 0 0 1 1.06,0l3.75,3.75a0.75,0.75 0 0 1 -1.06,1.06l-3.22,-3.22l-3.22,3.22a0.75,0.75 0 0 1 -1.06,-1.06l3.75,-3.75z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" fill-opacity="<?php echo e($field->sortDirection('desc') && $field->sortActive() ? '1' : '.4', false); ?>" d="m12.53,4.72zm-4.81,9.75a0.75,0.75 0 0 1 1.06,0l3.22,3.22l3.22,-3.22a0.75,0.75 0 1 1 1.06,1.06l-3.75,3.75a0.75,0.75 0 0 1 -1.06,0l-3.75,-3.75a0.75,0.75 0 0 1 0,-1.06z" clip-rule="evenodd"></path>
                </svg>
            </a>
        <?php else: ?>
            <?php echo e($field->label(), false); ?>

        <?php endif; ?>
    </th>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(!$preview && $rows?->first()?->getActions()?->isNotEmpty()): ?>
    <th></th>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/table/head.blade.php ENDPATH**/ ?>