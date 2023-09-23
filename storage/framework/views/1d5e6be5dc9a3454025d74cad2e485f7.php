<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'items' => []
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'items' => []
]); ?>
<?php foreach (array_filter(([
    'items' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($items): ?>
    <!-- Breadcrumbs -->
    <div <?php echo e($attributes->class(['breadcrumbs', 'grow']), false); ?>>
        <ul class="breadcrumbs-list">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="breadcrumbs-item">
                    <?php if($loop->last && count($items) > 1): ?>
                        <span>
                            <?php echo e(str($title)->before(':::'), false); ?>

                        </span>
                    <?php else: ?>
                        <a href="<?php echo e($url, false); ?>">
                            <?php if(str($title)->contains(':::')): ?>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.icon','data' => ['icon' => str($title)->after(':::')->value(),'size' => '6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str($title)->after(':::')->value()),'size' => '6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            <?php endif; ?>

                            <?php echo e(str($title)->before(':::'), false); ?>

                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <!-- END: Breadcrumbs -->
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/components/breadcrumbs.blade.php ENDPATH**/ ?>