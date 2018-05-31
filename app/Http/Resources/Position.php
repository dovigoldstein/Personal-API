<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Position extends Resource
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
            'type' => 'position',
            'id'  => (string)$this->id,
            'attributes' => [
                'role' => $this->role,
                'employer' => $this->employer,
                'location' => $this->location,
                'employment_type' => $this->employment_type,
                'from_date' => $this->from_date->format('Y'),
                'to_date' => $this->to_date->format('Y')
            ]
        ];
    }
}
