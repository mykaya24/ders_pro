<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\DataTransferObjects\TeacherDto;

class StoreTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'adress' => 'required|string',
            'phone' => 'required|string',
            'is_working' => 'boolean',
            'user_id' => 'required|integer|exists:users,id',
        ];
    }

    public function toDto(): TeacherDto
    {
        return new TeacherDto(
            id: $this->input('id'),
            name: $this->input('name'),
            surname: $this->input('surname'),
            adress: $this->input('adress'),
            phone: $this->input('phone'),
            is_working: $this->boolean('is_working', true),
            user_id: (int) $this->input('user_id'),
        );
    }
}