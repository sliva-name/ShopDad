<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'eventName' => null,
    'name' => 'default',
    'open' => $isOpen ?? false,
    'left' => $isLeft ?? false,
    'title' => '',
    'async' => false,
    'asyncUrl' => '',
    'toggler' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'eventName' => null,
    'name' => 'default',
    'open' => $isOpen ?? false,
    'left' => $isLeft ?? false,
    'title' => '',
    'async' => false,
    'asyncUrl' => '',
    'toggler' => null,
]); ?>
<?php foreach (array_filter(([
    'eventName' => null,
    'name' => 'default',
    'open' => $isOpen ?? false,
    'left' => $isLeft ?? false,
    'title' => '',
    'async' => false,
    'asyncUrl' => '',
    'toggler' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div x-data="offcanvas(
    `<?php echo e($open, false); ?>`,
    `<?php echo e($async ? str_replace('&amp;', '&', $asyncUrl) : '', false); ?>`
)"
    <?php echo e($attributes, false); ?>

>
    <?php if($toggler?->isNotEmpty()): ?>
        <?php if (isset($component)) { $__componentOriginalec670fa434a76aa5cbcd93ca765df912 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec670fa434a76aa5cbcd93ca765df912 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.link-button','data' => ['attributes' => $toggler->attributes?->merge([
                '@click.prevent' => 'toggleCanvas',
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toggler->attributes?->merge([
                '@click.prevent' => 'toggleCanvas',
            ]))]); ?>
            <?php echo e($toggler ?? '', false); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec670fa434a76aa5cbcd93ca765df912)): ?>
<?php $attributes = $__attributesOriginalec670fa434a76aa5cbcd93ca765df912; ?>
<?php unset($__attributesOriginalec670fa434a76aa5cbcd93ca765df912); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec670fa434a76aa5cbcd93ca765df912)): ?>
<?php $component = $__componentOriginalec670fa434a76aa5cbcd93ca765df912; ?>
<?php unset($__componentOriginalec670fa434a76aa5cbcd93ca765df912); ?>
<?php endif; ?>
    <?php endif; ?>

    <template x-teleport="body">
        <div class="offcanvas-template"
             <?php echo MoonShine\Support\AlpineJs::eventBlade('offcanvas-toggled', ($eventName ?? $name), 'toggleCanvas'); ?>
        >
            <div
                x-show="open"
                x-bind="dismissCanvas"
                <?php if($left): ?>
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-x-full"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-full"
                <?php else: ?>
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-x-full"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 translate-x-full"
                <?php endif; ?>
                class="offcanvas offcanvas-<?php echo e($left ? 'left' : 'right', false); ?>"
                aria-modal="true"
                role="dialog"
            >
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title"><?php echo e($title, false); ?></h5>
                    <button type="button" class="btn btn-close" @click.prevent="toggleCanvas" aria-label="Close">
                        <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.x-mark'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(MoonShine\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $attributes = $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $component = $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <?php if($async): ?>
                        <div :id="id">
                            <?php if (isset($component)) { $__componentOriginal879dcdea788ffa383131dbf9a35ec128 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal879dcdea788ffa383131dbf9a35ec128 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.loader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                        </div>
                    <?php endif; ?>

                    <?php echo e($slot ?? '', false); ?>

                </div>
            </div>
            <div x-show="open" x-transition.opacity class="offcanvas-backdrop"></div>
        </div>
    </template>
</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/offcanvas.blade.php ENDPATH**/ ?>