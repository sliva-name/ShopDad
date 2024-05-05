<?php

namespace App\Providers;

use App\Models\Order;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\OrderItemsResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ProductResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function menu(): array
    {
        return [
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('heroicons.user'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('heroicons.bookmark'),
            ])->translatable(),
            MenuItem::make('Продукты', new ProductResource())->icon('heroicons.outline.shopping-bag'),
            MenuItem::make('Категории', new CategoryResource())->icon('heroicons.rectangle-group'),
            MenuItem::make('Заказы', new OrderResource())->icon('heroicons.outline.shopping-cart')->badge(fn() => Order::query()->count()),
        ];
    }
    protected function resources(): array
    {
        return [
            new OrderItemsResource()
        ];
    }
}
