<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'tc' => $this->tc,
            'student_number' => $this->student_number,
            'name' => $this->name,
            'surname' => $this->surname,
            'phone' => $this->phone,
            'adress' => $this->adress,
            'is_active' => (bool) $this->is_active,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}