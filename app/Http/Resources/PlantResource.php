<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlantResource extends JsonResource
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
            "id" => $this->id,
            "category" => PlantCategoryResource::make($this->plantCategory),
            "name" => $this->name,
            "water_date" => $this->water_date,
            "next_water_date" => $this->next_water_date,
        ];
    }
}
