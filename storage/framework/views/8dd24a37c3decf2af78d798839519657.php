<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'value' => null,
    'values' => null,
    'alt' => '',
    'names' => null,
    'itemAttributes' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'value' => null,
    'values' => null,
    'alt' => '',
    'names' => null,
    'itemAttributes' => null,
]); ?>
<?php foreach (array_filter(([
    'value' => null,
    'values' => null,
    'alt' => '',
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
<?php if($value): ?>
    <div class="flex">
        <div
            <?php if(is_null($itemAttributes)): ?>
                class="zoom-in h-10 w-10 overflow-hidden rounded-md"
            <?php else: ?>
                <?php echo e(value($itemAttributes, $value)?->class(['zoom-in h-10 w-10 overflow-hidden rounded-md']), false); ?>

            <?php endif; ?>
        >
            <img class="h-full w-full object-cover"
                 src="<?php echo e($value, false); ?>"
                 alt="<?php echo e(value($names, $value) ?? $alt, false); ?>"
                 @click.stop="$dispatch('img-popup', {open: true, src: '<?php echo e($value, false); ?>' })"
            >
        </div>
    </div>
<?php elseif($values): ?>
    <div class="images-row">
        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                <?php if(is_null($itemAttributes)): ?>
                    class="zoom-in images-row-item"
                <?php else: ?>
                    <?php echo e(value($itemAttributes, $value, $index)?->class(['zoom-in images-row-item']), false); ?>

                <?php endif; ?>
            >
                <img
                    class="h-full w-full object-cover"
                     src="<?php echo e($value, false); ?>"
                     alt="<?php echo e(value($names, $value, $index) ?? $alt, false); ?>"
                     @click.stop="$dispatch('img-popup', {open: true, src: '<?php echo e($value, false); ?>' })"
                />
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/thumbnails.blade.php ENDPATH**/ ?>