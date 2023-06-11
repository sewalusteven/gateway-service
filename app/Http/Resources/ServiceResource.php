<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            "name" => $this->name,
            "description" => $this->description,
            "devUrl" => $this->dev_url,
            "devPort" => $this->dev_port,
            "prodUrl" => $this->prod_url,
            "prodPort" => $this->prod_port,
            "enabled" => $this->enabled
        ];
    }
}
