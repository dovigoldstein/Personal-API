<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Positions extends Resource
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
                'employer' => $this->employer
            ]
        ];
    }
}
