<?php

namespace App\Repositories;

use App\DataTransferObjects\StudentDto;
use App\Models\Student;

interface StudentRepositoryInterface
{
    public function create(StudentDto $dto): Student;
    public function update(Student $student, StudentDto $dto): Student;
}