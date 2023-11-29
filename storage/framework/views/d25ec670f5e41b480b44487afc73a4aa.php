<div class="bg-white">
    <header class="relative bg-white">
        <nav aria-label="Top" class="mx-auto container px-4 sm:px-6 lg:px-4">
            <div class="border-b border-gray-200">
                <div class="flex h-16 items-center">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button" id="mobileMenuOpen" class="relative sm:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-400 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
                          Icon when menu is closed.

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" id="closedMenu" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                          Icon when menu is open.

                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" id="openMenu" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="<?php echo e(route('home'), false); ?>">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="LOGO">
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="flex h-full space-x-8">
                            <div class="flex">
                                <div class="relative flex">
                                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                    <button type="button" class="border-transparent text-gray-700 hover:border-indigo-600 focus:border-indigo-600 focus:text-indigo-600 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Чёт неизвестное</button>
                                </div>
                                <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                                </div>
                            </div>

                            <div class="relative flex items-center text-left border-transparent text-gray-700 hover:border-indigo-600 focus:border-indigo-600 focus:text-indigo-600 hover:text-gray-800 z-10 -mb-px border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out">
                                <div>
                                    <button type="button" class="flex items-center" id="menu-button-category" aria-expanded="true" aria-haspopup="true">
                                        Категории
                                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                <div class="absolute hidden right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" id="menu-category" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="/product/category/<?php echo e($category->id, false); ?>" class="text-gray-700 block px-4 py-2 text-sm hover:bg-indigo-600 hover:text-white ease-in-out" role="menuitem" tabindex="-1" id="menu-item-0"><?php echo e($category->title, false); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <a href="<?php echo e(route('order.get'), false); ?>" class="border-transparent text-gray-700 hover:border-indigo-600 focus:border-indigo-600 focus:text-indigo-600 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out">Мои заказы</a>
                        </div>
                    </div>

                    <div class="ml-auto flex items-center">
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                           <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('login'), false); ?>" class="text-sm font-medium text-gray-700 hover:text-gray-800">Войти</a>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                <a href="<?php echo e(route('register'), false); ?>" class="text-sm font-medium text-gray-700 hover:text-gray-800">Создать аккаунт</a>
                           <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('profile.edit'), false); ?>">
                                    <img width="40" src="https://ui-avatars.com/api/?name=<?php echo e(auth()->user()->name, false); ?>&rounded=true" alt="avatar">
                                </a>

                            <?php endif; ?>
                        </div>

                        <!-- Search -->
                        <div class="flex lg:ml-6">
                            <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Search</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </a>
                        </div>

                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6">
                            <a href="<?php echo e(route('cart.index'), false); ?>" class="group -m-2 flex items-center p-2">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800"><?php echo e(\Cart::getContent()->count(), false); ?></span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:hidden hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('login'), false); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Войти</a>
                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                        <a href="<?php echo e(route('register'), false); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Создать аккаунт</a>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('profile.edit'), false); ?>">
                            <img width="40" src="https://ui-avatars.com/api/?name=<?php echo e(auth()->user()->name, false); ?>&rounded=true" alt="avatar">
                        </a>

                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
</div>
<?php /**PATH D:\OSPanel\domains\ShopDad\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>