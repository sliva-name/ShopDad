<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'route',
    'logOutRoute',
    'avatar',
    'name' => '',
    'username' => '',
    'withBorder' => false,
    'before',
    'after',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'route',
    'logOutRoute',
    'avatar',
    'name' => '',
    'username' => '',
    'withBorder' => false,
    'before',
    'after',
]); ?>
<?php foreach (array_filter(([
    'route',
    'logOutRoute',
    'avatar',
    'name' => '',
    'username' => '',
    'withBorder' => false,
    'before',
    'after',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($withBorder): ?> <div <?php echo e($attributes->merge(['class' => 'mt-2 border-t border-dark-200']), false); ?>> <?php endif; ?>
    <?php echo e($before ?? '', false); ?>


    <?php if(isset($slot) && $slot->isNotEmpty()): ?>
        <?php echo e($slot, false); ?>

    <?php else: ?>
        <div class="menu-profile">
            <a href="<?php echo e($route, false); ?>"
               class="menu-profile-main"
            >
                <div class="menu-profile-photo">
                    <img class="h-full w-full object-cover"
                         src="<?php echo e($avatar, false); ?>"
                         alt="<?php echo e($nameOfUser, false); ?>"
                    />
                </div>
                <div class="menu-profile-info">
                    <h5 class="name"><?php echo e($nameOfUser, false); ?></h5>
                    <div class="email"><?php echo e($username, false); ?></div>
                </div>
            </a>

            <a href="<?php echo e($logOutRoute, false); ?>"
               class="menu-profile-exit"
               title="Logout"
            >
                <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.power','color' => 'gray','size' => '6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            </a>
        </div>
    <?php endif; ?>

    <?php echo e($after ?? '', false); ?>

<?php if($withBorder): ?> </div> <?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/layout/profile.blade.php ENDPATH**/ ?>