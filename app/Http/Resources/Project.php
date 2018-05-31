<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Project extends Resource
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
            'type' => 'project',
            'id'  => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
                'url' => $this->url,
                'description' => $this->description
            ]
        ];
    }
}
