<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'parameters' => $this->parameters,
            'description' => $this->description,
            'price' => $this->price,
            'img' => $this->img,
            'quantity' => $this->quantity,
            'category' => with(new \App\Models\Category())->find($this->category_id)->title,
        ];
    }
}
