@extends('layouts.shop')
@section('content')
    <form class="w-full px-6 pt-16 pb-24" method="post" action="{{ route('order.add') }}" >
        @csrf
        <div class="grid grid-cols-2">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-4xl font-bold text-gray-900">Оформление заказа</h2>
                <p class="mt-4 text-sm leading-6 text-gray-600">Используйте настоящий Email адрес, на него приходит информация о заказе.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Ваше имя</label>
                        <div class="mt-2">
                            <input type="text" name="first_name" value="{{ old('first_name') }}" id="first-name" autocomplete="given-name" class="@error('first_name') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('first_name')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Ваша фамилия</label>
                        <div class="mt-2">
                            <input type="text" name="last_name" value="{{ old('last_name') }}" id="last-name" autocomplete="family-name" class="@error('last_name') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('last_name')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email адрес</label>
                        <div class="mt-2">
                            <input id="email" name="email" value="{{ old('email') }}" type="email" autocomplete="email" class="@error('email') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('email')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="col-span-full">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Город</label>
                        <div class="mt-2">
                            <input type="text" name="city" value="{{ old('city') }}" id="city" autocomplete="address-level2" class="@error('city') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('city')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Улица</label>
                        <div class="mt-2">
                            <input type="text" name="street_address" value="{{ old('street_address') }}" id="street-address" autocomplete="street-address" class="@error('street_address') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('street_address')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Регион</label>
                        <div class="mt-2">
                            <input type="text" name="region" value="{{ old('region') }}" id="region" autocomplete="address-level1" class="@error('region') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('region')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Почтовый индекс</label>
                        <div class="mt-2">
                            <input type="text" name="postal_code" value="{{ old('postal_code') }}" id="postal-code" autocomplete="postal-code" class="@error('postal_code') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('postal_code')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-full">
                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Телефон</label>
                        <div class="mt-2">
                            <input type="text" name="phone" value="{{ old('phone') }}" id="phone" autocomplete="phone" class="@error('phone') border-red-500 @enderror block w-full tel rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('phone')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


{{--     tovars       --}}


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/cart" class="text-sm font-semibold leading-6 text-gray-900">Отмена</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Подтвердить заказ</button>
        </div>
    </form>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            [].forEach.call( document.querySelectorAll('.tel'), function(input) {
                var keyCode;
                function mask(event) {
                    event.keyCode && (keyCode = event.keyCode);
                    let pos = this.selectionStart;
                    if (pos < 3) event.preventDefault();
                    let matrix = "+7 (___) ___ ____",
                        i = 0,
                        def = matrix.replace(/\D/g, ""),
                        val = this.value.replace(/\D/g, ""),
                        new_value = matrix.replace(/[_\d]/g, function (a) {
                            return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                        });
                    i = new_value.indexOf("_");
                    if (i != -1) {
                        i < 5 && (i = 3);
                        new_value = new_value.slice(0, i)
                    }
                    let reg = matrix.substr(0, this.value.length).replace(/_+/g, function (a) {
                            return "\\d{1," + a.length + "}"
                        }).replace(/[+()]/g, "\\$&");
                    reg = new RegExp("^" + reg + "$");
                    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                    if (event.type == "blur" && this.value.length < 5)  this.value = ""
                }

                input.addEventListener("input", mask, false);
                input.addEventListener("focus", mask, false);
                input.addEventListener("blur", mask, false);
                input.addEventListener("keydown", mask, false)

            });

        });
    </script>
@endsection
