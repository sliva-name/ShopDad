<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;

class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Продукты';

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
            BelongsTo::make('Категория', 'category', resource: new CategoryResource())
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
}
