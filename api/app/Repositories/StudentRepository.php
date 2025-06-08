<?php

namespace App\Repositories\Eloquent;

use App\DataTransferObjects\StudentDto;
use App\Models\Student;
use App\Repositories\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    public function create(StudentDto $dto):Student
    {
        return Student::create([
            'tc' => $dto->tc,
            'student_number' => $dto->student_number,
            'name' => $dto->name,
            'surname' => $dto->surname,
            'adress' => $dto->adress,
            'phone' => $dto->phone,
            'is_active' => $dto->is_active,
            'user_id' => $dto->user_id,
        ]);
    }


    
    public function update(Student $student, StudentDto $dto): Student 
    {
        $student->update([
            'tc' => $dto->tc,
            'student_number' => $dto->student_number,
            'name' => $dto->name,
            'surname' => $dto->surname,
            'adress' => $dto->adress,
            'surname' => $dto->phone,
            'is_active' => $dto->is_active,
            'user_id' => $dto->user_id,
        ]);

        return $student;
    }
}