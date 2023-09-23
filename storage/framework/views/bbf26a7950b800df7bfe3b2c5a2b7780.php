<!-- Search -->
<div class="search" x-data="{ toggleSearch: false }">
    <form action="<?php echo e($resource->currentRoute(), false); ?>"
          x-ref="searchForm"
          class="search-form hidden md:block"
          :class="toggleSearch && '_is-toggled'"
    >
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['xData' => '{}','xRef' => 'searchInput','name' => 'search','@keyup.ctrl.k.window' => '$refs.searchInput.focus()','@keyup.ctrl.period.window' => '$refs.searchInput.focus()','type' => 'search','class' => 'search-form-field','value' => ''.e(request('search', ''), false).'','placeholder' => ''.e(trans('moonshine::ui.search'), false).' (Ctrl+K)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{}','x-ref' => 'searchInput','name' => 'search','@keyup.ctrl.k.window' => '$refs.searchInput.focus()','@keyup.ctrl.period.window' => '$refs.searchInput.focus()','type' => 'search','class' => 'search-form-field','value' => ''.e(request('search', ''), false).'','placeholder' => ''.e(trans('moonshine::ui.search'), false).' (Ctrl+K)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <svg @click.prevent="$refs.searchForm.submit()" class="search-form-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>

        <button @click.prevent="toggleSearch = ! toggleSearch" class="search-form-close block md:hidden" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </form>
    <div class="inline-flex items-center md:hidden">
        <button type="button" @click.prevent="toggleSearch = ! toggleSearch" class="text-slate-600 hover:text-pink">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button>
    </div>
</div>
<!-- END: Search -->
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\moonshine\moonshine\resources\views/crud/shared/search.blade.php ENDPATH**/ ?>