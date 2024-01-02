<?php $__env->startSection('content'); ?>
    <div class="flex items-baseline justify-between pb-6 pt-24">
        <h1 class="font-bold lg:text-4xl sm:text-2xl text-gray-900">Товары</h1>

        <div class="flex items-center">
            <div class="relative inline-block text-left">
                <div>
                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button-filter" aria-expanded="false" aria-haspopup="true">
                        Сортировка
                        <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div id="menu-filter" class="hidden transition ease-out duration-100 absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                        <a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                        <a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                        <a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-3">Цена: От низкой до высокой</a>
                        <a class="text-gray-500 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-4">Цена: От высокой до низкой</a>
                    </div>
                </div>
            </div>

            <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                <span class="sr-only">View grid</span>
                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
                </svg>
            </button>
            <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                <span class="sr-only">Filters</span>
                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <section aria-labelledby="products-heading" class="pb-24 pt-6">
        <h2 id="products-heading" class="sr-only">Продукты</h2>

        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
            <!-- Filters -->
            <form action="<?php echo e(route('home'), false); ?>" method="get" enctype="multipart/form-data" class="hidden lg:block">
                <h3 class="sr-only">Категории</h3>
                <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="/product/category/<?php echo e($category->id, false); ?>"><?php echo e($category->title, false); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="border-b border-gray-200 py-6">
                    <h3 class="-my-3 flow-root">
                        <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false" id="toggle-button">
                            <span class="font-medium text-gray-900">Категория</span>
                            <span class="ml-6 flex items-center" id="icon-container">
                                <svg class="h-5 w-5 expand-icon" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                </svg>
                                <svg class="h-5 w-5 collapse-icon hidden" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </h3>
                    <!-- Filter section, show/hide based on section state. -->
                    <div class="pt-6 hidden" id="filter-section-1">
                        <div class="space-y-4">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center">
                                    <input id="filter-category-<?php echo e($category->id, false); ?>" name="category[]" value="<?php echo e($category->id, false); ?>" type="checkbox" <?php if(request()->has('category') && in_array($category->id, request('category'))): ?> checked <?php endif; ?> class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-category-<?php echo e($category->id, false); ?>" class="ml-3 text-sm text-gray-600"><?php echo e($category->title, false); ?></label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="bg-indigo-600 py-3 w-full mt-5 px-4 text-white rounded-lg">Применить</button>
            </form>

            <!-- Product grid -->
            <div class="lg:col-span-3">
                <div class="grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-6">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group p-6 border border-gray-200 rounded-lg hover:-translate-y-1 transform-gpu transition ease-in-out">
                            <div class="aspect-h-1 aspect-w-1 h-1/2 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <div class="swiper mySwiper-<?php echo e($product->id, false); ?> max-h-[250px] h-full">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $product->img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                <img id="product_image" src="<?php echo e(asset('storage/' . $img), false); ?>" class="h-56 w-full object-cover object-center group-hover:opacity-75" alt="image_item">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <script>
                                    var swiper = new Swiper(".mySwiper-<?php echo e($product->id, false); ?>", {
                                        autoplay: {
                                            delay: 2500,
                                            disableOnInteraction: false,
                                        },
                                        pagination: {
                                            el: ".swiper-pagination",
                                        },
                                    });
                                </script>
                            </div>
                            <div class="flex flex-col lg:gap-3 gap-2 mt-6">
                                <p class="lg:text-xl text-[13px] font-bold text-gray-900"><?php echo e($product->price, false); ?><span class="ml-[5px]">₽</span></p>
                                <a href="<?php echo e(route('product', $product->id), false); ?>" class="lg:text-[16px] sm:text-[13px] text-[13px] text-gray-900 font-medium hover:text-indigo-600"><?php echo e(Str::limit($product->title, 40), false); ?></a>
                                <p class="lg:text-sm sm:text-[13px] text-[13px] flex text-gray-700">
                                    <?php if($product->quantity > 0): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" aria-hidden="true"
                                             class="lg:w-5 lg:h-5 sm:w-4 sm:h-4 w-3 h-3 flex-shrink-0 text-green-500">
                                            <path fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-2.5">В наличии</span>
                                    <?php else: ?>
                                        <svg viewBox="0 -0.5 25 25" fill="currentColor" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="lg:w-5 lg:h-5 sm:w-4 sm:h-4 w-3 h-3 flex-shrink-0 text-red-500">
                                            <path fill-rule="evenodd"
                                                  d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <span class="ml-2.5">Нет в наличии</span>
                                    <?php endif; ?>

                                </p>
                                <form method="post" action="<?php echo e(route('cart.add', $product->id), false); ?>" class="mb-0">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="rounded-lg bg-indigo-600 text-white lg:text-[16px] text-[13px] lg:px-3 lg:py-2 px-2 py-1 w-full hover:bg-indigo-500">В корзину</button>
                                </form>

                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center mt-12">
            <?php echo e($products->links(), false); ?>

        </div>
    </section>









<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\ShopDad\resources\views/welcome.blade.php ENDPATH**/ ?>