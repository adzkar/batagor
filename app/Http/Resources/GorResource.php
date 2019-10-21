<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GorResource extends JsonResource
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
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'ratings' => new RatingCollection($this->whenLoaded('ratings')),
            'lapangans' => new LapanganCollection($this->whenLoaded('lapangans')),
            'images' => new ImagesCollection($this->whenLoaded('images'))
        ];
    }
}
