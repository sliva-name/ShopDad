<?php $__env->startSection('content'); ?>
    <div class="w-full px-6 pt-16 pb-24">
        <h1 class="font-bold text-4xl text-gray-900">Корзина</h1>
        <form action="<?php echo e(route('order.index'), false); ?>" class="py-12 grid grid-cols-1 gap-y-12  lg:grid-cols-12 sm:grid-cols-1 lg:gap-12 sm:gap-y-12 items-start">
            <section class="cart_items col-span-7">
                <?php if(Cart::session(\Auth::user()->id)->isEmpty()): ?>
                    <h2 class="text-3xl text-gray-900 font-medium">Корзина пуста</h2>
                <?php else: ?>
                    <ul class="border-t border-b" id="products">
                        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="py-10 flex sm:flex-row lg:sm:flex-row flex-col border-b first-of-type:border-t-0 last-of-type:border-b-0" id="item">
                                <div class="flex-shrink-0 w-full h-24 mb-4 lg:mb-0 sm:mb-0 lg:w-48 lg:h-48 sm:w-24 sm:h-24">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <?php $__currentLoopData = $item->associatedModel->img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                    <img src="<?php echo e(asset('storage/' . $img), false); ?>" alt="item_img" class="w-full rounded-md object-cover bg-gray-100">
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <script>
                                        const swiper = new Swiper(".mySwiper", {
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
                                <div class="lg:ml-6 sm:ml-6 ml-0 flex flex-col justify-between flex-1">
                                    <div class="grid lg:grid-cols-2 sm:grid-cols-1 relative pr-0 gap-6">
                                        <div>
                                            <div class="flex justify-between flex-col">
                                                <div class="flex justify-between">
                                                    <h3 class="text-sm">
                                                        <a href="#"
                                                           class="font-medium text-gray-700"><?php echo e($item->name, false); ?></a>
                                                    </h3>
                                                </div>
                                                <div class="flex mt-1 text-sm">
                                                    <?php $__currentLoopData = $item->associatedModel->parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parameter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <p class="text-gray-600 first-of-type:ml-0 ml-4 first-of-type:pl-0 pl-4 first-of-type:border-none border-l"><?php echo e($parameter, false); ?></p>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <p class="mt-1 text-gray-900 text-sm font-medium"><?php echo e($item->price, false); ?>

                                                    руб</p>
                                            </div>
                                        </div>
                                        <div class="mt-0 pr-9">
                                            <label for="quantity" class="t"></label>
                                            <select id="quantity" name="quantity" data-id="<?php echo e($item->id, false); ?>"
                                                    class="quantity font-medium text-gray-700 shadow-sm text-sm border rounded-md max-w-full border-gray-300 py-1.5">
                                                <?php for($i = 1; $i <= $item->associatedModel->quantity; $i++): ?>
                                                    <option <?php if($i == $item->quantity): ?> selected
                                                            <?php endif; ?> value="<?php echo e($i, false); ?>"><?php echo e($i, false); ?></option>
                                                <?php endfor; ?>
                                            </select>
                                            <div class="top-0 right-0 absolute">
                                                <button data-id="<?php echo e($item->id, false); ?>"
                                                        class="deleteCardItem text-gray-400 p-2 inline-flex -m-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                                        <path
                                                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm mt-4 flex text-gray-700">
                                        <?php if($item->associatedModel->quantity > 0): ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true"
                                                 class="w-5 h-5 flex-shrink-0 text-green-500">
                                                <path fill-rule="evenodd"
                                                      d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="ml-2.5">В наличии</span>
                                        <?php else: ?>
                                            <svg viewBox="0 -0.5 25 25" fill="currentColor" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="w-5 h-5 flex-shrink-0 text-red-500">
                                                <path fill-rule="evenodd"
                                                      d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <span class="ml-2.5">Нет в наличии</span>
                                        <?php endif; ?>

                                    </p>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
            </section>
            <section class="p-8 mt-0 col-span-5 bg-gray-100 rounded-lg" id="price">
                <h2 class="font-medium text-lg">Краткое описание заказа</h2>
                <dl class="mt-6 space-y-4">
                    <?php $__currentLoopData = $cartConditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex lg:gap-0 gap-4 lg:flex-row sm:flex-row flex-col justify-between items-center border-t  first-of-type:border-t-0  pt-4">
                            <dt class="text-sm text-gray-600"><?php echo e($condition->getName(), false); ?></dt>
                            <dd class="text-sm font-medium text-gray-900"><?php echo e($condition->getValue(), false); ?></dd>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = \Cart::session(\Auth::user()->id)->getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex lg:gap-0 gap-4 lg:flex-row sm:flex-row flex-col justify-between items-center border-t  first-of-type:border-t-0  pt-4">
                                <dt class="text-sm text-gray-600"><?php echo e($item->name, false); ?> X <span id="quantity_item"><?php echo e($item->quantity, false); ?></span></dt>
                                <dd class="text-sm font-medium text-gray-900"><?php echo e($item->price *  $item->quantity, false); ?></dd>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="flex lg:gap-0 gap-4 lg:flex-row sm:flex-row flex-col justify-between items-center  border-t  pt-4">
                        <dt class="text-base font-medium text-gray-900">Итоговая цена</dt>
                        <dd class="text-base font-medium text-gray-900" id="total"><?php echo e(Cart::session(\Auth::user()->id)->getTotal(), false); ?> руб</dd>
                    </div>
                </dl>
                <div class="mt-6">
                    <button type="submit"
                            class="shadow-sm text-white font-medium py-3 px-4 bg-indigo-600 border rounded-md w-full hover:bg-indigo-500 ease-in">
                        Заказать
                    </button>
                </div>
            </section>
        </form>
    </div>
    <script>
        $('.deleteCardItem').on('click', function (e) {
            e.preventDefault()
            let id = $(this).data('id')
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('cart.remove'), false); ?>",
                data: {id: id},
                success: function (result) {
                    console.log(result)
                },
                error: function (result) {
                    console.log(result)
                }
            });
            this.closest('li').remove();
            if($('#products li').length === 0)
            {
                $('#products').remove()
                $('#price').remove()
                $('.cart_items').append(`<h2 class="text-3xl text-gray-900 font-medium">Корзина пуста</h2>`)
            }
        })


        $(".quantity").each(function () {
            $(this).change(function () {
                let quantity = $(this).val();
                let id = $(this).data('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('cart.update'), false); ?>",
                    data: {id: id, quantity: quantity},
                    success: function (result) {
                        $('#total').html(result.total)
                        $('#quantity_item').html(result.quantity)
                    },
                    error: function (result) {
                        console.log(result);
                    }
                });
            })
        })
    </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\ShopDad\resources\views/cart/index.blade.php ENDPATH**/ ?>