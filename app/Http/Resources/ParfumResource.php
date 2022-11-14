<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ParfumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $status = 'Non Active';
        if ($this->status == 1) {
            $status = 'Active';
        }
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'description' => Str::limit($this->description, 30, '...'),
            'status' => $status,
        ];
    }
}
