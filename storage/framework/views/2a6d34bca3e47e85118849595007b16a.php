<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'rows',
    'fields',
    'bulkButtons',
    'asyncUrl',
    'async' => false,
    'preview' => false,
    'simple' => false,
    'simplePaginate' => false,
    'editable' => false,
    'notfound' => false,
    'vertical' => false,
    'creatable' => false,
    'reindex' => false,
    'sortable' => false,
    'searchable' => false,
    'searchValue' => '',
    'name' => 'default'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'rows',
    'fields',
    'bulkButtons',
    'asyncUrl',
    'async' => false,
    'preview' => false,
    'simple' => false,
    'simplePaginate' => false,
    'editable' => false,
    'notfound' => false,
    'vertical' => false,
    'creatable' => false,
    'reindex' => false,
    'sortable' => false,
    'searchable' => false,
    'searchValue' => '',
    'name' => 'default'
]); ?>
<?php foreach (array_filter(([
    'rows',
    'fields',
    'bulkButtons',
    'asyncUrl',
    'async' => false,
    'preview' => false,
    'simple' => false,
    'simplePaginate' => false,
    'editable' => false,
    'notfound' => false,
    'vertical' => false,
    'creatable' => false,
    'reindex' => false,
    'sortable' => false,
    'searchable' => false,
    'searchValue' => '',
    'name' => 'default'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data="tableBuilder(
    <?php echo e((int) $creatable, false); ?>,
    <?php echo e((int) $sortable, false); ?>,
    <?php echo e((int) $reindex, false); ?>,
    <?php echo e((int) $async, false); ?>,
    '<?php echo e($asyncUrl, false); ?>'
)"
    data-pushstate="<?php echo e($attributes->get('data-pushstate', false), false); ?>"
    <?php echo MoonShine\Support\AlpineJs::eventBlade('table-row-added', $name, 'add(true)'); ?>
    <?php echo MoonShine\Support\AlpineJs::eventBlade('table-reindex', $name, 'resolveReindex'); ?>
    <?php echo MoonShine\Support\AlpineJs::eventBladeWhen($async, 'table-updated', $name, 'asyncRequest'); ?>
    <?php echo e($attributes->only(['data-events']), false); ?>

>
    <?php if($async && $searchable): ?>
        <div class="flex items-center gap-2">
            <form action="<?php echo e($asyncUrl, false); ?>"
                  @submit.prevent="asyncFormRequest"
            >
                <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['name' => 'search','type' => 'search','value' => ''.e($searchValue, false).'','placeholder' => ''.e(__('moonshine::ui.search'), false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'search','type' => 'search','value' => ''.e($searchValue, false).'','placeholder' => ''.e(__('moonshine::ui.search'), false).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
            </form>
        </div>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal879dcdea788ffa383131dbf9a35ec128 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal879dcdea788ffa383131dbf9a35ec128 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.loader','data' => ['xShow' => 'loading']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'loading']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal879dcdea788ffa383131dbf9a35ec128)): ?>
<?php $attributes = $__attributesOriginal879dcdea788ffa383131dbf9a35ec128; ?>
<?php unset($__attributesOriginal879dcdea788ffa383131dbf9a35ec128); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal879dcdea788ffa383131dbf9a35ec128)): ?>
<?php $component = $__componentOriginal879dcdea788ffa383131dbf9a35ec128; ?>
<?php unset($__componentOriginal879dcdea788ffa383131dbf9a35ec128); ?>
<?php endif; ?>
        <div x-show="!loading">
        <?php if (isset($component)) { $__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.index','data' => ['simple' => $simple,'notfound' => $notfound,'attributes' => $attributes,'creatable' => $creatable,'dataName' => ''.e($name, false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['simple' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($simple),'notfound' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($notfound),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'creatable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($creatable),'data-name' => ''.e($name, false).'']); ?>
            <?php if(!$vertical): ?>
                 <?php $__env->slot('thead', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal2a87f7bde776cd517e52b84ed85135c7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a87f7bde776cd517e52b84ed85135c7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.head','data' => ['rows' => $rows,'fields' => $fields,'actions' => $bulkButtons,'asyncUrl' => $asyncUrl,'preview' => $preview]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rows),'fields' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fields),'actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bulkButtons),'asyncUrl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($asyncUrl),'preview' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($preview)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a87f7bde776cd517e52b84ed85135c7)): ?>
<?php $attributes = $__attributesOriginal2a87f7bde776cd517e52b84ed85135c7; ?>
<?php unset($__attributesOriginal2a87f7bde776cd517e52b84ed85135c7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a87f7bde776cd517e52b84ed85135c7)): ?>
<?php $component = $__componentOriginal2a87f7bde776cd517e52b84ed85135c7; ?>
<?php unset($__componentOriginal2a87f7bde776cd517e52b84ed85135c7); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>

            <?php if($rows->isNotEmpty()): ?>
                 <?php $__env->slot('tbody', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.body','data' => ['rows' => $rows,'vertical' => $vertical,'preview' => $preview,'editable' => $editable,'simple' => $simple,'hasActions' => $bulkButtons->isNotEmpty(),'hasClickAction' => $attributes->get('data-click-action') !== null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rows),'vertical' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vertical),'preview' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($preview),'editable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($editable),'simple' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($simple),'hasActions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bulkButtons->isNotEmpty()),'has-click-action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->get('data-click-action') !== null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1)): ?>
<?php $attributes = $__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1; ?>
<?php unset($__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1)): ?>
<?php $component = $__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1; ?>
<?php unset($__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>

            <?php if(!$preview): ?>
             <?php $__env->slot('tfoot', null, [':class' => 'actionsOpen ? \'translate-y-none ease-out\' : \'-translate-y-full ease-in hidden\'']); ?> 
                <?php if (isset($component)) { $__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.foot','data' => ['rows' => $rows,'actions' => $bulkButtons]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::table.foot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rows),'actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bulkButtons)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb)): ?>
<?php $attributes = $__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb; ?>
<?php unset($__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb)): ?>
<?php $component = $__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb; ?>
<?php unset($__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871)): ?>
<?php $attributes = $__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871; ?>
<?php unset($__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871)): ?>
<?php $component = $__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871; ?>
<?php unset($__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871); ?>
<?php endif; ?>

        <?php if($creatable): ?>
            <?php if (isset($component)) { $__componentOriginal5b3523037f393515dbb12b0b2c7450ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $attributes = $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $component = $__componentOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>

            <?php echo $createButton; ?>

        <?php endif; ?>

        <?php if(!$preview && $hasPaginator): ?>
            <?php echo e($paginator->links(
                $simplePaginate
                    ? 'moonshine::ui.simple-pagination'
                    : 'moonshine::ui.pagination',
                ['async' => $async]
            ), false); ?>

        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/table/builder.blade.php ENDPATH**/ ?>