<?php if (isset($component)) { $__componentOriginale0fb811781c4ce8a33d518277d23e979 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0fb811781c4ce8a33d518277d23e979 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.pagination','data' => ['paginator' => $paginator,'elements' => $elements,'async' => $async]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['paginator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($paginator),'elements' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($elements),'async' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($async)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0fb811781c4ce8a33d518277d23e979)): ?>
<?php $attributes = $__attributesOriginale0fb811781c4ce8a33d518277d23e979; ?>
<?php unset($__attributesOriginale0fb811781c4ce8a33d518277d23e979); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0fb811781c4ce8a33d518277d23e979)): ?>
<?php $component = $__componentOriginale0fb811781c4ce8a33d518277d23e979; ?>
<?php unset($__componentOriginale0fb811781c4ce8a33d518277d23e979); ?>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/ui/pagination.blade.php ENDPATH**/ ?>