<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\DataTransferObjects\CourseDto;

class StoreCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
        ];
    }

    public function toDto(): CourseDto
    {
        return new CourseDto(
            id: $this->input('id'),
            name: $this->input('name'),
            description: $this->input('description'),
        );
    }
}