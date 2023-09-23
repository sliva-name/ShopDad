<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use Illuminate\Support\Facades\Route;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ProductResource extends Resource
{
	public static string $model = Product::class;

    public static string $title = 'Продукты';

    /**
     * @throws \Throwable
     */
    public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Название', 'title'),
            Text::make('Описание', 'description'),
            Json::make('Характеристики', 'parameters')
                ->keyValue('Ключ', 'Значение')
                ->removable(),
            Number::make('Цена', 'price'),
            Number::make('Количество', 'quantity'),
            Image::make('Фото', 'img')
                ->multiple()
                ->dir('/products')
                ->disk('public')
                ->removable(),
            BelongsTo::make('Категория', 'category_id', 'title')
        ];
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
    public function store(Model $item)
    {

    }
}
