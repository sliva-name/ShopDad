<?php if($element->isResourceMode()): ?>
    <?php if($item->exists): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.title','data' => ['class' => 'mb-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-6']); ?>
            <?php echo e($element->label(), false); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php if($element->resource()->can('create') && in_array('create', $element->resource()->getActiveActions())): ?>
            <?php if (isset($component)) { $__componentOriginal4ab79dabb71607517dfca2b0949f2e80 = $component; } ?>
<?php $component = MoonShine\Components\AsyncModal::resolve(['route' => ''.e($resource->route('relation-field-form', query: [
                '_field_relation' => $element->relation(),
                '_related_key' => $item->getKey()
                ]), false).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::async-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\AsyncModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($element->resource()->title(), false).'']); ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.icon','data' => ['icon' => 'heroicons.squares-plus','size' => '4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicons.squares-plus','size' => '4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <span><?php echo e(trans('moonshine::ui.create'), false); ?></span>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ab79dabb71607517dfca2b0949f2e80)): ?>
<?php $component = $__componentOriginal4ab79dabb71607517dfca2b0949f2e80; ?>
<?php unset($__componentOriginal4ab79dabb71607517dfca2b0949f2e80); ?>
<?php endif; ?>
        <?php endif; ?>

        <hr class="divider" />

        <div x-data="{ id: $id('has_many') }">
            <div x-data="asyncData"
                 x-init="load(
                    '<?php echo e($resource->route('relation-field-items', $item->getKey(), query: [
                            '_field_relation' => $element->relation()
                        ]), false); ?>',
                     id
                 )">
                <div :id="id"></div>
            </div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <?php echo $__env->make('moonshine::fields.table-fields', [
        'element' => $element,
        'resource' => $resource,
        'item' => $item,
        'model' => $element->formViewValue($item)->first() ?? $element->getRelated($item),
        'level' => $level ?? 0,
        'toOne' => false,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/fields/has-many.blade.php ENDPATH**/ ?>