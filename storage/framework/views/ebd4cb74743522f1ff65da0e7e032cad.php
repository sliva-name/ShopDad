<a href="<?php echo e($home_route ?? moonshineRouter()->home(), false); ?>" class="block" rel="home">
    <img src="<?php echo e(asset(config('moonshine.logo') ?? 'vendor/moonshine/logo.svg'), false); ?>"
         class="hidden h-14 xl:block"
         :class="minimizedMenu && '!hidden'"
         alt="<?php echo e(config('moonshine.title'), false); ?>"
    />
    <img src="<?php echo e(asset(config('moonshine.logo_small') ?? 'vendor/moonshine/logo-small.svg'), false); ?>"
         class="block h-8 lg:h-10 xl:hidden"
         :class="minimizedMenu && '!block'"
         alt="<?php echo e(config('moonshine.title'), false); ?>"
    />
</a>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\src\Providers/../../resources/views/layouts/shared/logo.blade.php ENDPATH**/ ?>