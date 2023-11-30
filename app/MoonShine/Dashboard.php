<?php

namespace App\MoonShine;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ProductResource;
use MoonShine\Dashboard\DashboardBlock;
use MoonShine\Dashboard\DashboardScreen;
use MoonShine\Dashboard\ResourcePreview;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Text;
use MoonShine\Menu\MenuGroup;
use MoonShine\Metrics\LineChartMetric;
use MoonShine\Metrics\ValueMetric;

class Dashboard extends DashboardScreen
{
	public function blocks(): array
	{
		return [
            DashboardBlock::make([
                LineChartMetric::make('Метрика продаж')
                    ->line([
                        'Всего' => Order::query()
                            ->selectRaw('SUM(summ) as sum, DATE_FORMAT(created_at, "%d.%m.%Y") as date')
                            ->groupBy('date')
                            ->pluck('sum','date')
                            ->toArray(),
                        'Среднее значение' => Order::query()
                            ->selectRaw('AVG(summ) as avg, DATE_FORMAT(created_at, "%d.%m.%Y") as date')
                            ->groupBy('date')
                            ->pluck('avg','date')
                            ->toArray()
                    ],['red', 'blue'])
            ]),
            DashboardBlock::make([
                ResourcePreview::make(
                    new OrderResource(), // Mandatory parameter with MoonShine resource
                    'Последние заказы', // Optional - block header
                    Order::query()->orderByDesc('created_at')->with('order')->limit(2) // Optional QueryBuilder
                )
            ])
        ];

	}
}
