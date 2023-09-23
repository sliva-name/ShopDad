<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.index','data' => ['xData' => 'tableFields('.e($element->attributes()->get('x-model-has-fields')
            ? 'item.'.$element->field()
            : json_encode($element->jsonValues($item)), false).')','dataEmpty' => ''.e(json_encode($element->jsonValues()), false).'','dataInputTable' => ''.e(str_replace('[]', '', $element->name()), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => 'tableFields('.e($element->attributes()->get('x-model-has-fields')
            ? 'item.'.$element->field()
            : json_encode($element->jsonValues($item)), false).')','data-empty' => ''.e(json_encode($element->jsonValues()), false).'','data-input-table' => ''.e(str_replace('[]', '', $element->name()), false).'']); ?>
     <?php $__env->slot('thead', null, []); ?> 
        <?php if(!$element->isFullPage()): ?>
            <?php if(!$toOne): ?>
                <th width="5%" class="text-center">#</th>
            <?php endif; ?>

            <?php $__currentLoopData = $element->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e($subField->label(), false); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($element->isRemovable()): ?>
                <th width="5%" class="text-center"></th>
            <?php endif; ?>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('tbody', null, []); ?> 
        <template
            x-for="(item, index<?php echo e($level, false); ?>) in items"
            :key="key(item, index<?php echo e($level, false); ?>)"
        >
            <tr :data-id="key(item, index<?php echo e($level, false); ?>)" class="table_fields_<?php echo e($element->id(), false); ?>">
                <?php if(!$element->isFullPage()): ?>
                    <?php if(!$toOne): ?>
                        <td class="text-center" scope="row" x-text="index<?php echo e($level, false); ?> + 1"></td>
                    <?php endif; ?>

                    <?php $__currentLoopData = $element->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="space-y-3">
                            <?php echo e($resource->renderComponent($subField, $model, $level+1), false); ?>

                        </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($element->isRemovable()): ?>
                        <td>
                            <button type="button" @click.prevent="remove(index<?php echo e($level, false); ?>)" class="badge badge-red">&times;</button>
                        </td>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if(!$toOne): ?>
                        <th width="5%" class="text-center" x-text="index<?php echo e($level, false); ?> + 1"></th>
                    <?php endif; ?>

                    <td class="space-y-3">
                        <?php $__currentLoopData = $element->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.field-container','data' => ['field' => $subField,'item' => $model,'resource' => $resource]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::field-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($subField),'item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model),'resource' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($resource)]); ?>
                                <?php echo e($resource->renderComponent($subField, $model, $level+1), false); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>

                    <?php if($element->isRemovable()): ?>
                        <td width="5%" class="text-center">
                            <button type="button" @click.prevent="remove(index<?php echo e($level, false); ?>)" class="badge badge-red">&times;</button>
                        </td>
                    <?php endif; ?>
                <?php endif; ?>
            </tr>
        </template>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('tfoot', null, []); ?> 
        <td colspan="<?php echo e(count($element->getFields())+2, false); ?>">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.link','data' => ['class' => 'w-full','icon' => 'heroicons.plus-circle','xShow' => $toOne ? 'items.length == 0' : 'true','@click.prevent' => 'add()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full','icon' => 'heroicons.plus-circle','x-show' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toOne ? 'items.length == 0' : 'true'),'@click.prevent' => 'add()']); ?>
                <?php echo app('translator')->get('moonshine::ui.' . ($toOne ? 'create' : 'add')); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </td>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/fields/table-fields.blade.php ENDPATH**/ ?>