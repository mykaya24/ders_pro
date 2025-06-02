<?php

namespace App\Repositories\Eloquent;

use App\DataTransferObjects\BranchDto;
use App\DataTransferObjects\TeacherDto;
use App\Models\Branch;
use App\Models\Teacher;
use App\Repositories\BranchRepositoryInterface;

class TeacherRepository implements TeacherRepositoryInterface
{
    public function create(TeacherDto $dto): Branch
    {
        return Branch::create([
           
            'name' => $dto->name,
            'surname' => $dto->surname,
            'adress' => $dto->adress,
            'phone' => $dto->phone,
            'is_working' => $dto->is_working,
            'user_id' => $dto->user_id,
        ]);
    }


    
    public function update(Teacher $teacher, TeacherDto $dto): Branch
    {
        $phone->update([
            'name' => $dto->name,
            'surname' => $dto->surname,
            'adress' => $dto->adress,
            'surname' => $dto->phone,
            'is_working' => $dto->is_working,
            'user_id' => $dto->user_id,
        ]);

        return $phone;
    }
}