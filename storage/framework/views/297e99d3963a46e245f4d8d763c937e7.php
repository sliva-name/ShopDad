<?php if($item->exists && $resource->hasUserPermissions()): ?>
    <div>
        <div class="text-lg my-4"><?php echo e($element->label(), false); ?></div>

        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.index','data' => ['action' => $resource->route('permissions', $item->getKey()),'method' => 'post']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($resource->route('permissions', $item->getKey())),'method' => 'post']); ?>
            <?php $__currentLoopData = moonshine()->getResources(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="text-md my-4"><?php echo e($resource->title(), false); ?></div>

                    <div class="flex items-center justify-start space-x-4">
                        <?php $__currentLoopData = $resource->gateAbilities(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ability): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input-wrapper','data' => ['name' => 'permissions['.e(get_class($resource), false).']['.e($ability, false).']','label' => $ability,'beforeLabel' => true,'class' => 'form-group-inline','id' => str('permissions_' . get_class($resource) . '_' . $ability)->slug('_')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'permissions['.e(get_class($resource), false).']['.e($ability, false).']','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ability),'beforeLabel' => true,'class' => 'form-group-inline','id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str('permissions_' . get_class($resource) . '_' . $ability)->slug('_'))]); ?>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['id' => str('permissions_' . get_class($resource) . '_' . $ability)->slug('_'),'type' => 'checkbox','name' => 'permissions['.e(get_class($resource), false).']['.e($ability, false).']','value' => '1','checked' => $resource->isHaveUserPermission($item, $ability)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str('permissions_' . get_class($resource) . '_' . $ability)->slug('_')),'type' => 'checkbox','name' => 'permissions['.e(get_class($resource), false).']['.e($ability, false).']','value' => '1','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($resource->isHaveUserPermission($item, $ability))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             <?php $__env->slot('button', null, ['type' => 'submit','class' => 'form_submit_button']); ?> 
                <?php echo e(trans('moonshine::ui.save'), false); ?>

             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/form-components/permissions.blade.php ENDPATH**/ ?>