<input <?php echo e($attributes->merge([
    'class' => !in_array($attributes->get('type'), ['checkbox', 'radio', 'color'])
        ? 'form-input'
        : 'form-' . $attributes->get('type', 'input'),
    'type' => 'text']), false); ?>

/>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/form/input.blade.php ENDPATH**/ ?>