<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Institution extends Resource
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
            'type' => 'institution',
            'id'  => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
                'location' => $this->location,
                'education_type' => $this->education_type,
                'from_date' => $this->from_date->format('Y'),
                'to_date' => $this->to_date->format('Y')
            ]
        ];
    }
}
