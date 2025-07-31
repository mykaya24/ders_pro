<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\DataTransferObjects\TeacherProgramDto;

class StoreTeacherProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'teacher_id' => 'required|int',
            'day' => 'required|int',
            'hour' => 'required|int',
            
        ];
    }

    public function toDto(): TeacherProgramDto
    {
        return new TeacherProgramDto(
            id: $this->input('id'),
            teacher_id: $this->input('teacher_id'),
            day: $this->input('day'),
            hour: $this->input('hour'),
            workable: $this->input('workable'),
            description: $this->input('description')
        );
    }
}