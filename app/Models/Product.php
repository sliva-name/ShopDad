<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $title
 */
class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'parameters' => 'array',
        'img' => 'array'
    ];
    protected $fillable = [
        'id',
        'title',
        'description',
        'parameters',
        'price',
        'quantity',
        'img',
        'category_id',
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filters): Builder
    {
        return $filters->apply($builder);
    }

}
