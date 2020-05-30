<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TownshipHostelCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'number_of_room' => $this->number_of_room,
            'number_of_person' => $this->number_of_person,
            'monthly_fee' => $this->monthly_fee,
            'address' => $this->address,
            'township' => $this->township
        ];
    }
}
