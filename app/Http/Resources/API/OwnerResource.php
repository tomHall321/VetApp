<?php

namespace App\Http\Resources\API;
use App\Models\Owner;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
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
            "id" => $this->id,
            "full_name" => $this->fullName(),
            "telephone" => $this->formattedPhoneNumber(),
            "full_address" => $this->fullAddress(),
            ];
    }
}
