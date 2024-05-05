<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

class OrderItemsResource extends ModelResource
{
    protected string $model = OrderItem::class;

    protected string $title = 'OrderItem';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Название', 'name'),
                Text::make('Количество', 'quantity'),
                Text::make('Цена за предмет', 'price'),
                BelongsTo::make('Предмет', 'product')->badge('green')->link(fn($item) => (new ProductResource)->detailPageUrl($item)),
            ]),
        ];
    }

    /**
     * @param OrderItems $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
