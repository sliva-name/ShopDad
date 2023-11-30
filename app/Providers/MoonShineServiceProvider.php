<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Product;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ProductResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('Система', [
                MenuItem::make('Администрация', new MoonShineUserResource())->translatable()->icon('users'),
                MenuItem::make('Роли', new MoonShineUserRoleResource())->translatable()->icon('bookmark'),
            ])->translatable(),
            MenuItem::make('Продукты', new ProductResource())->icon('cart'),
            MenuItem::make('Категории', new CategoryResource())->icon('heroicons.rectangle-group'),
            MenuItem::make('Заказы', new OrderResource())->icon('users')->badge(fn() => Order::query()->count()),
        ]);
    }
}
