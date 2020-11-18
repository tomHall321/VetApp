<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "type" => $this->type,
            "dob" => $this->date_of_birth,
            "weight" => $this->weight,
            "height" => $this->height,
            "biteyness" => $this->biteyness,
            "owner_name" => $this->owner->fullname(),
            ];
    }
}
