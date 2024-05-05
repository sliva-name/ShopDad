<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'item',
    'top' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'item',
    'top' => false,
]); ?>
<?php foreach (array_filter(([
    'item',
    'top' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($item instanceof MoonShine\Menu\MenuDivider): ?>
    <li class="menu-inner-divider">
        <?php echo $item->label() ? "<span>{$item->label()}</span>" : ''; ?>

    </li>
<?php else: ?>
    <li class="menu-inner-item <?php echo e($item->isActive() ? '_is-active' : '', false); ?>">
        <a
            href="<?php echo e($item->url(), false); ?>" <?php echo $item->isBlank() ? 'target="_blank"' : ''; ?>

            class="menu-inner-link"
            x-data="navTooltip"
            @mouseenter="toggleTooltip()"
        >
            <?php if($item->iconValue()): ?>
                <?php echo $item->getIcon(6); ?>

            <?php elseif(!$top): ?>
                <span class="menu-inner-item-char">
                    <?php echo e(str($item->label())->limit(2), false); ?>

                </span>
            <?php endif; ?>

            <span class="menu-inner-text"><?php echo e($item->label(), false); ?></span>

            <?php if($item->hasBadge() && $badge = $item->getBadge()): ?>
                <span class="menu-inner-counter"><?php echo e($badge, false); ?></span>
            <?php endif; ?>
        </a>
    </li>
<?php endif; ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/components/menu/item.blade.php ENDPATH**/ ?>