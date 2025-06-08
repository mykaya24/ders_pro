<?php

namespace App\Services;

use App\DataTransferObjects\StudentDto;
use App\Models\Student;
use App\Repositories\StudentRepositoryInterface;

class StudentService
{
    public function __construct(
        protected StudentRepositoryInterface $repository
    ) {}

    public function create(StudentDto $dto): Student
    {
        return $this->repository->create($dto);
    }

    public function update(Student $student, StudentDto $dto): Student
    {
        return $this->repository->update($student, $dto);
    }
}