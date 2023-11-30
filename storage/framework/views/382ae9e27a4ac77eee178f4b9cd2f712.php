<?php if($element->logs($item)->isNotEmpty()): ?>
    <div class="my-4">
        <div class="text-lg"><?php echo e($element->label(), false); ?></div>
        <div class="text-sm"><?php echo app('translator')->get('moonshine::ui.last_changes'); ?></div>
    </div>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('thead', null, []); ?> 
            <th>
                <?php echo app('translator')->get('moonshine::ui.user'); ?>
            </th>
            <th>
                <?php echo app('translator')->get('moonshine::ui.changes'); ?>
            </th>
            <th>
                <?php echo app('translator')->get('moonshine::ui.date'); ?>
            </th>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('tbody', null, []); ?> 
            <?php $__currentLoopData = $element->logs($item)->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo $__env->make('moonshine::ui.badge', [
                            'color' => 'purple',
                            'value' => $log->moonshineUser->name
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                    <td>
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                             <?php $__env->slot('thead', null, []); ?> 
                    <th>
                        <?php echo app('translator')->get('moonshine::ui.field'); ?>
                    </th>
                    <th>
                        <?php echo app('translator')->get('moonshine::ui.before'); ?>
                    </th>
                    <th>
                        <?php echo app('translator')->get('moonshine::ui.after'); ?>
                    </th>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('tbody', null, []); ?> 
                <?php $__currentLoopData = $log->states_after; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $changedField => $changedValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($resource->getField($changedField) && !$resource->getField($changedField) instanceof \MoonShine\Fields\Json): ?>
                        <tr>
                            <td>
                                <?php echo e($resource->getField($changedField) ? $resource->getField($changedField)->label() : $changedField, false); ?>

                            </td>

                            <td>
                                <?php echo e(is_array($log->states_before[$changedField]) ? json_encode($log->states_before[$changedField]) : $log->states_before[$changedField], false); ?>

                            </td>
                            <td>
                                <?php echo e(is_array($changedValue) ? json_encode($changedValue) : $changedValue, false); ?>

                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </td>
    <td>
        <?php echo e($log->created_at->format('d.m.Y H:i'), false); ?>

    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/form-components/change-log.blade.php ENDPATH**/ ?>