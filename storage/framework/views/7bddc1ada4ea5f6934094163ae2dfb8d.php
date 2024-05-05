<?php if (isset($component)) { $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.column','data' => ['colSpan' => $element->columnSpanValue(),'adaptiveColSpan' => $element->adaptiveColumnSpanValue(),'attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->columnSpanValue()),'adaptiveColSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->adaptiveColumnSpanValue()),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
    <?php if (isset($component)) { $__componentOriginalbe9b282893bab4ef9e234898f6c1bda7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7 = $attributes; } ?>
<?php $component = MoonShine\Components\FieldsGroup::resolve(['components' => $element->getFields()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::fields-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\FieldsGroup::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['container' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7)): ?>
<?php $attributes = $__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7; ?>
<?php unset($__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe9b282893bab4ef9e234898f6c1bda7)): ?>
<?php $component = $__componentOriginalbe9b282893bab4ef9e234898f6c1bda7; ?>
<?php unset($__componentOriginalbe9b282893bab4ef9e234898f6c1bda7); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e)): ?>
<?php $attributes = $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e; ?>
<?php unset($__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e)): ?>
<?php $component = $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e; ?>
<?php unset($__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/decorations/column.blade.php ENDPATH**/ ?>