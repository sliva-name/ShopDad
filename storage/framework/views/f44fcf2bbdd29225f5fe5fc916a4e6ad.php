<?php if($data): ?>
    <ul <?php echo e($attributes->class(['menu-inner', 'grow']), false); ?>

        <?php if(!request()->routeIs('moonshine.index') && !request()->routeIs('moonshine.custom_page')): ?>
            x-init="$nextTick(() => document.querySelector('.menu-inner-item._is-active').scrollIntoView())"
        <?php endif; ?>
    >
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => 'moonshine::menu.'.e($item->isGroup() ? 'group' : 'item', false).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => $item]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/components/menu/index.blade.php ENDPATH**/ ?>