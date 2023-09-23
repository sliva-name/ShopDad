@extends('layouts.shop')

@section('content')
    <div class="w-full px-6 pt-16 pb-24">
        <h1 class="font-bold text-4xl text-gray-900">Корзина</h1>
        <form action="{{ route('order.index') }}"
              class="py-12 grid lg:grid-cols-12 sm:grid-cols-1 lg:gap-12 sm:gap-y-12 items-start">
            <section class="cart_items col-span-7">
                @if (Cart::isEmpty())
                    <h2 class="text-3xl text-gray-900 font-medium">Корзина пуста</h2>
                @else
                    <ul class="border-t border-b" id="products">
                        @foreach($cartItems as $item)
                            <li class="py-10 flex border-b first-of-type:border-t-0 last-of-type:border-b-0" id="item">
                                <div class="flex-shrink-0 lg:w-48 lg:h-48 sm:w-24 sm:h-24">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            @foreach($item->associatedModel->img as $img)
                                            <div class="swiper-slide">
                                                    <img src="{{ '/storage/' . $img }}" alt="item_img" class="w-full rounded-md object-cover bg-gray-100">
                                            </div>
                                            @endforeach
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
                                <div class="ml-6 flex flex-col justify-between flex-1">
                                    <div class="grid lg:grid-cols-2 sm:grid-cols-1 relative pr-0 gap-6">
                                        <div>
                                            <div class="flex justify-between flex-col">
                                                <div class="flex justify-between">
                                                    <h3 class="text-sm">
                                                        <a href="#"
                                                           class="font-medium text-gray-700">{{ $item->name }}</a>
                                                    </h3>
                                                </div>
                                                <div class="flex mt-1 text-sm">
                                                    @foreach($item->associatedModel->parameters as $parameter)
                                                        <p class="text-gray-600 first-of-type:ml-0 ml-4 first-of-type:pl-0 pl-4 first-of-type:border-none border-l">{{ $parameter }}</p>
                                                    @endforeach
                                                </div>
                                                <p class="mt-1 text-gray-900 text-sm font-medium">{{ $item->price }}
                                                    руб</p>
                                            </div>
                                        </div>
                                        <div class="mt-0 pr-9">
                                            <label for="quantity" class="t"></label>
                                            <select id="quantity" name="quantity" data-id="{{ $item->id }}"
                                                    class="quantity font-medium text-gray-700 shadow-sm text-sm border rounded-md max-w-full border-gray-300 py-1.5">
                                                @for($i = 1; $i <= $item->associatedModel->quantity; $i++)
                                                    <option @if($i == $item->quantity) selected
                                                            @endif value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                            <div class="top-0 right-0 absolute">
                                                <button data-id="{{ $item->id }}"
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
                                        @if($item->associatedModel->quantity > 0)
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true"
                                                 class="w-5 h-5 flex-shrink-0 text-green-500">
                                                <path fill-rule="evenodd"
                                                      d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="ml-2.5">В наличии</span>
                                        @else
                                            <svg viewBox="0 -0.5 25 25" fill="currentColor" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="w-5 h-5 flex-shrink-0 text-red-500">
                                                <path fill-rule="evenodd"
                                                      d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <span class="ml-2.5">Нет в наличии</span>
                                        @endif

                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
            </section>
            <section class="p-8 mt-0 col-span-5 bg-gray-100 rounded-lg" id="price">
                <h2 class="font-medium text-lg">Краткое описание заказа</h2>
                <dl class="mt-6 space-y-4">
                    @foreach($cartConditions as $condition)
                        <div class="flex justify-between items-center border-t  first-of-type:border-t-0  pt-4">
                            <dt class="text-sm text-gray-600">{{ $condition->getName() }}</dt>
                            <dd class="text-sm font-medium text-gray-900">{{ $condition->getValue() }}</dd>
                        </div>
                    @endforeach
                        @foreach(\Cart::getContent() as $item)
                            <div class="flex justify-between items-center border-t  first-of-type:border-t-0  pt-4">
                                <dt class="text-sm text-gray-600">{{ $item->name }} X {{ $item->quantity }}</dt>
                                <dd class="text-sm font-medium text-gray-900">{{ $item->price *  $item->quantity}}</dd>
                            </div>
                        @endforeach

                    <div class="flex justify-between items-center  border-t  pt-4">
                        <dt class="text-base font-medium text-gray-900">Итоговая цена</dt>
                        <dd class="text-base font-medium text-gray-900" id="total">{{ Cart::getTotal() }} руб</dd>
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
                url: "{{ route('cart.remove') }}",
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
                    url: "{{ route('cart.update') }}",
                    data: {id: id, quantity: quantity},
                    success: function (result) {
                        $('#total').html(result.total)
                    },
                    error: function (result) {
                        console.log(result);
                    }
                });
            })
        })
    </script>
    @endif
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

