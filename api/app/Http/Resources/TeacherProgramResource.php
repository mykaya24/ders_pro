<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherProgramResource extends JsonResource
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
            'teacher_id' => $this->teacher_id,
            'day' => $this->day,
            'hour' => $this->hour,
            'workable' => $this->workable,
            'description' => $this->description,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}