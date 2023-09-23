<div
    <?php if($element->attributes()->get('x-model-field')): ?>
        x-html="<?php echo e($element->attributes()->get('x-model-field'), false); ?>"
    <?php endif; ?>
>
    <?php echo (string) $element->formViewValue($item) ?? ''; ?>

</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/fields/no-input.blade.php ENDPATH**/ ?>