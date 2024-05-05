<?php if (isset($component)) { $__componentOriginal17d49b4d1d6c04451d0077c615d6f998 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17d49b4d1d6c04451d0077c615d6f998 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.grid','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
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
<?php if (isset($__attributesOriginal17d49b4d1d6c04451d0077c615d6f998)): ?>
<?php $attributes = $__attributesOriginal17d49b4d1d6c04451d0077c615d6f998; ?>
<?php unset($__attributesOriginal17d49b4d1d6c04451d0077c615d6f998); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17d49b4d1d6c04451d0077c615d6f998)): ?>
<?php $component = $__componentOriginal17d49b4d1d6c04451d0077c615d6f998; ?>
<?php unset($__componentOriginal17d49b4d1d6c04451d0077c615d6f998); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/decorations/grid.blade.php ENDPATH**/ ?>