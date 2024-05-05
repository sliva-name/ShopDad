<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use Illuminate\Http\Request;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;

class CategoryResource extends ModelResource
{
	protected string $model = Category::class;

    protected string $title = 'Категории товаров';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Название', 'title'),
            BelongsTo::make('Подкатегория', 'parent', resource: new CategoryResource())
                ->nullable()
                ->asyncSearch('title',
                    asyncSearchQuery: function (Builder $query, Request $request): Builder {
                        return $query->where('parent_id', $request->get('parent_id'));
                    }
                )
                ->associatedWith('parent_id')
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
