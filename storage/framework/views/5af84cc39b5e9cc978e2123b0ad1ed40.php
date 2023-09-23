<?php echo $__env->make('moonshine::fields.table-fields', [
    'element' => $element,
    'resource' => $resource,
    'item' => $item,
    'model' => $resource->getModel(),
    'level' => $level ?? 0,
    'toOne' => false,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/fields/json.blade.php ENDPATH**/ ?>