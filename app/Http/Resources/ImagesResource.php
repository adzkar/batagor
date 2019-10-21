<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImagesResource extends JsonResource
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
            'file_name' => $this->file_name,
            'gor_id' => $this->gor_id,
            'lapangan_id' => $this->lapangan_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'gor' => new GorResource($this->whenLoaded('gor')),
            'lapangan' => new LapanganResource($this->whenLoaded('lapangan'))
        ];
    }
}
