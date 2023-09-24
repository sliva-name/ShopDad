<?php

namespace App\MoonShine\Resources;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\BelongsToMany;
use MoonShine\Fields\Date;
use MoonShine\Fields\HasMany;
use MoonShine\Fields\Image;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class OrderResource extends Resource
{
	public static string $model = Order::class;

	public static string $title = 'Заказы';

    protected bool $showInModal = true;
    public static string $subTitle = 'Управление заказами';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Имя', 'first_name', fn($item) => $item->first_name . ' ' . $item->last_name),
            HasMany::make('Заказанные предметы', 'order_id')->fields([
                BelongsTo::make('Id предмета', 'product_id', 'id'),
                Text::make('Название', 'name'),
                Text::make('Количество', 'quantity'),
                Text::make('Цена за предмет', 'price'),
                NoInput::make('Фото', 'product_thumb', fn($item) => view('moonshine::components.thumbnails', ['values' => $this->recordsArray($item)]))
            ])->removable()->hideOnIndex(),

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
        foreach ($array->product->img as $item) {
            $arr[] = '/storage/' . $item;
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

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
