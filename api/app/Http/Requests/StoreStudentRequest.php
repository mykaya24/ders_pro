<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\DataTransferObjects\StudentDto;

class StoreStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tc' => 'required|string',
            'student_number' => 'required|string',
            'name' => 'required|string',
            'surname' => 'required|string',
            'adress' => 'required|string',
            'phone' => 'required|string',
            'is_active' => 'boolean',
            'user_id' => 'required|integer|exists:users,id',
        ];
    }

    public function toDto(): StudentDto
    {
        return new StudentDto(
            id: $this->input('id'),
            tc: $this->input('tc'),
            student_number: $this->input('student_number'),
            name: $this->input('name'),
            surname: $this->input('surname'),
            adress: $this->input('adress'),
            phone: $this->input('phone'),
            is_active: $this->boolean('is_active', true),
            user_id: (int) $this->input('user_id'),
        );
    }
}