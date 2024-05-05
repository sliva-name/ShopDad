<label <?php echo e($attributes->merge(['class' => 'form-label'])->except('required'), false); ?>>
    <?php echo e($slot ?? '', false); ?>


    <?php if($attributes->get('required', false)): ?>
        <span class="required">*</span>
    <?php endif; ?>
</label>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/form/label.blade.php ENDPATH**/ ?>