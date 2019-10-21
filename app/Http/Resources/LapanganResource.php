<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LapanganResource extends JsonResource
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
            'id' => $this->id,
            'harga' => $this->harga,
            'detail' => $this->detail,
            'gor_id' => $this->gor_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'carts' => new CartCollection($this->whenLoaded('carts')),
            'images' => new ImagesCollection($this->whenLoaded('images')),
            'gor' => new GorResource($this->whenLoaded('gor'))
        ];
    }
}
