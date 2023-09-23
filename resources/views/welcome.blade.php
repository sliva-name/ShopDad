@extends('layouts.shop')

@section('content')
    <section class="w-full px-6 pt-16 pb-24">
        <h1 class="font-bold text-4xl text-gray-900">Товары</h1>
        <div class="bg-white">
            <div class="w-full lg:py-12 sm:py-6">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-6">
                    @foreach($products as $product)
                    <div class="group p-6 border border-gray-200 rounded-lg hover:translate-y-1 transition ease-in-out">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <div class="swiper mySwiper max-h-[250px] h-full">
                                <div class="swiper-wrapper">
                                    @foreach($product->img as $img)
                                        <div class="swiper-slide">
                                            <img id="product_image" src="{{ 'storage/' . $img }}" class="h-56 w-full object-cover object-center group-hover:opacity-75" alt="image_item">
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
                        <div class="flex flex-col gap-3 mt-6">
                            <a href="{{ route('product', $product->id) }}" class="text-lg text-gray-900 font-medium hover:text-indigo-600">{{ $product->title }}</a>
                            <p class="text-lg font-bold text-gray-900">{{ $product->price }} руб.</p>
                            <p class="text-sm flex text-gray-700">
                                @if($product->quantity > 0)
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
                            <form method="post" action="{{ route('cart.add', $product->id) }}">
                                @csrf
                                <button type="submit" class="rounded-lg bg-indigo-600 text-white px-3 py-2 w-full hover:bg-indigo-500">В корзину</button>
                            </form>

                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center mt-12">
            {{ $products->links() }}
        </div>

    </section>
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


