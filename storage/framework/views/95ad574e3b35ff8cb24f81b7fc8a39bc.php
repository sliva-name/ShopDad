<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'components' => [],
    'copyright' => $_copyright ?? '',
    'menu' => $_menu ?? []
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'components' => [],
    'copyright' => $_copyright ?? '',
    'menu' => $_menu ?? []
]); ?>
<?php foreach (array_filter(([
    'components' => [],
    'copyright' => $_copyright ?? '',
    'menu' => $_menu ?? []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<footer <?php echo e($attributes->merge(['class' => 'layout-footer']), false); ?>>
    <div class="flex flex-col flex-wrap items-center justify-between gap-y-4 gap-x-8 md:flex-row">
        <?php if (isset($component)) { $__componentOriginal011755f4cd8238a723199ac83befc65c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011755f4cd8238a723199ac83befc65c = $attributes; } ?>
<?php $component = MoonShine\Components\Components::resolve(['components' => $components] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::components'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\Components::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $attributes = $__attributesOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__attributesOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $component = $__componentOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__componentOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>

        <?php echo e($slot ?? '', false); ?>


        <div class="text-center text-2xs text-slate-500 md:text-left">
            <?php echo $copyright; ?>

        </div>

        <?php if(!empty($menu)): ?>
            <nav class="flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start lg:gap-x-6">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($link, false); ?>"
                       class="text-2xs text-slate-500 hover:text-primary"
                       target="_blank">
                        <?php echo $label; ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
        <?php endif; ?>
    </div>
</footer>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/layout/footer.blade.php ENDPATH**/ ?>