<?php

namespace App\Filters;

class ProductFilters extends QueryFilter
{
    public function category($id)
    {
        return $this->builder->whereIn('category_id', $id);
    }

    public function brands($brandIds)
    {
        return $this->builder->whereIn('brand_id', $this->paramToArray($brandIds));
    }

    public function search($keyword)
    {
        return $this->builder->where('title', 'like', '%'.$keyword.'%');
    }

    public function price($order = 'asc')
    {
        return $this->builder->orderBy('price', $order);
    }
}
