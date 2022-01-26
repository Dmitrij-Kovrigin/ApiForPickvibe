<?php

namespace App\Http\Resources;

use App\Models\Brand;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'years' => YearResource::collection($this->years),
            'brand' => Brand::where('id', $this->brand_id)->get('name'),
            'created_at' => $this->created_at,
        ];
    }
}
