<?php $__env->startSection('content'); ?>
<div class="lg:py-24 md:py-16">
    <div class="px-2 max-w-7xl mx-auto">
        <div class="max-w-4xl lg:px-0">
            <h1 class="text-3xl text-gray-900 font-bold tracking-tight">История заказов</h1>
            <p class="text-sm mt-2">Проверяйте статус последних заказов, управляйте возвратами и находите похожие товары.</p>
        </div>
        <div class="mt-16">
            <div class="lg:px-8 md:px-2 max-w-7xl mx-auto">
                <div class="lg:px-0 lg:max-w-4xl max-w-2xl mx-auto">
                    <div class="border rounded-lg shadow bg-white border-gray-200">
                        <h3 class="sr-only">Order placed on <time datetime="2021-07-06">Jul 6, 2021</time></h3>
                        <div class="p-6 grid grid-cols-4 gap-6 border-b items-center border-gray-200">
                            <dl class="col-span-3 lg:grid-cols-3 sm:grid-cols-2 grid flex-1 gap-6 text-sm">
                                <div>
                                    <dt class="font-medium text-gray-900">Order number</dt>
                                    <dd class="mt-1 text-gray-500">WU88191111</dd>
                                </div>
                                <div class="lg:block hidden">
                                    <dt class="font-medium text-gray-900">Date placed</dt>
                                    <dd class="mt-1 text-gray-500"><time datetime="2021-07-06">Jul 6, 2021</time></dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-900">Total amount</dt>
                                    <dd class="mt-1 font-medium text-gray-900">$160.00</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\ShopDad\resources\views/order/get.blade.php ENDPATH**/ ?>