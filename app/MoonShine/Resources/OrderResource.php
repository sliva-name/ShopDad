<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

use MoonShine\Fields\Date;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;

class OrderResource extends ModelResource
{
	protected string $model = Order::class;

    protected string $title = 'Заказы';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Имя', 'first_name', fn($item) => $item->first_name . ' ' . $item->last_name),
            HasMany::make('Заказанные предметы', 'orderItems', resource: new OrderItemsResource()),
            Text::make('Сумма заказа','summ'),
            Text::make('Телефон','phone'),
            Text::make('Регион','region'),
            Text::make('Город','city'),
            Text::make('Индекс города','postal_code'),
            Date::make('Дата заказа', 'created_at')->withTime()

        ];
	}
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Имя', 'first_name', fn($item) => $item->first_name . ' ' . $item->last_name),
            Text::make('Сумма заказа','summ'),
            Text::make('Телефон','phone'),
            Text::make('Регион','region'),
            Text::make('Город','city'),
            Text::make('Индекс города','postal_code'),
            Date::make('Дата заказа', 'created_at')->withTime()
        ];
    }

    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Имя', 'first_name', fn($item) => $item->first_name . ' ' . $item->last_name),
            HasMany::make('Заказанные предметы', 'orderItems', resource: new OrderItemsResource()),
            Text::make('Сумма заказа','summ'),
            Text::make('Телефон','phone'),
            Text::make('Регион','region'),
            Text::make('Город','city'),
            Text::make('Индекс города','postal_code'),
            Date::make('Дата заказа', 'created_at')->withTime()
        ];
    }

    public function detailFields(): array
    {
        return [
            ID::make('ID'),
            Text::make('Имя', 'first_name', fn($item) => $item->first_name . ' ' . $item->last_name),
            HasMany::make('Заказанные предметы', 'orderItems', resource: new OrderItemsResource()),
            Text::make('Сумма заказа','summ'),
            Text::make('Телефон','phone'),
            Text::make('Регион','region'),
            Text::make('Город','city'),
            Text::make('Индекс города','postal_code'),
            Date::make('Дата заказа', 'created_at')->withTime()
        ];
    }
    private function recordsArray($array): array
    {
        $arr = [];
        if (!empty($array->product?->img)) {
            foreach ($array->product->img as $item) {
                $arr[] = asset('/storage/' . $item);
            }
        }
        return $arr;
    }

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }
}
