<?php

namespace App\Http\Resources;

use App\Models\Proizvod;
use Illuminate\Http\Resources\Json\JsonResource;

class PorudzbinaResource extends JsonResource
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
            'id' => $this->resource->id,
            'datum' => $this->resource->datum,
            'kolicina' => $this->resource->kolicina,
            
            'proizvod' => new ProizvodResource(Proizvod::find($this->resource->proizvod_id))

        ];
    }
}
