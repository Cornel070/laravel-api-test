<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->active) {
            return [
                'hotel_name'        => $this->hotel_name,
                'hotel_star_rating' => $this->hotel_star_rating,
                $this->mergeWhen($this->reviews->count() > 0,['reviews' => $this->reviews]) // Load only when they are reviews
            ];
        }
    }
}
