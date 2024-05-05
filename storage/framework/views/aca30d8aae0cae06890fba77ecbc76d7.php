<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'simple' => false,
    'values' => false,
    'columns' => false,
    'notfound' => false,
    'responsive' => true,
    'thead',
    'tbody',
    'tfoot',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'simple' => false,
    'values' => false,
    'columns' => false,
    'notfound' => false,
    'responsive' => true,
    'thead',
    'tbody',
    'tfoot',
]); ?>
<?php foreach (array_filter(([
    'simple' => false,
    'values' => false,
    'columns' => false,
    'notfound' => false,
    'responsive' => true,
    'thead',
    'tbody',
    'tfoot',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if(isset($tbody) || (is_iterable($values) && count($values))): ?>
    <!-- Table -->
    <div <?php if($responsive): ?> class="table-responsive" <?php endif; ?>>
        <table <?php echo e($attributes
                ->merge(['class' => 'table' . (!$simple ? '-list' : '')]), false); ?> x-id="['table-component']" :id="$id('table-component')">
            <thead <?php echo e($thead->attributes ?? '', false); ?>>
            <tr>
                <?php if(is_array($columns)): ?>
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th>
                            <?php echo e($label, false); ?>

                        </th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php echo e($thead ?? '', false); ?>

            </tr>
            </thead>
            <tbody  <?php echo e($tbody->attributes ?? '', false); ?>>
            <?php if(is_iterable($values)): ?>
                <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <?php echo isset($data[$name]) && is_scalar($data[$name]) ? $data[$name] : ''; ?>

                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php echo e($tbody ?? '', false); ?>

            </tbody>

            <?php if($tfoot ?? false): ?>
                <tfoot <?php echo e($tfoot->attributes, false); ?>>
                    <tr>
                        <?php echo e($tfoot, false); ?>

                    </tr>
                </tfoot>
            <?php endif; ?>
        </table>
    </div>
<?php elseif($notfound): ?>
    <?php if (isset($component)) { $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be = $attributes; } ?>
<?php $component = MoonShine\Components\Alert::resolve(['type' => 'default','icon' => 'heroicons.no-symbol'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'my-4']); ?>
        <?php echo e(trans('moonshine::ui.notfound'), false); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $attributes = $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $component = $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/table/index.blade.php ENDPATH**/ ?>