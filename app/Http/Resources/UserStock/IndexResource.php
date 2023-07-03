<?php

namespace App\Http\Resources\UserStock;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return $this->resource->transform(fn ($item) => [
            'id' => $item->stock->id,
            'code' => $item->stock->code,
            'n' => $item->stock->n,
            'z' => $item->stock->z,
            'o' => $item->stock->o,
            'h' => $item->stock->h,
            'l' => $item->stock->l,
            'y' => $item->stock->y,
            'final_at' => $item->stock->final_at
        ]);
    }
}
