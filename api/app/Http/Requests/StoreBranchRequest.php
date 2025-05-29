<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\DataTransferObjects\BranchDto;

class StoreBranchRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'is_active' => 'boolean',
            'branch_teacher_id' => 'required|integer|exists:teachers,id',
        ];
    }

    public function toDto(): BranchDto
    {
        return new BranchDto(
            id: $this->input('id'),
            name: $this->input('name'),
            is_active: $this->boolean('is_active', true),
            branch_teacher_id: (int) $this->input('branch_teacher_id'),
        );
    }
}