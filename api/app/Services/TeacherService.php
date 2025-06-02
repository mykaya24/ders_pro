<?php

namespace App\Services;

use App\DataTransferObjects\TeacherDto;
use App\Models\Teacher;
use App\Repositories\TeacherRepositoryInterface;

class TeacherService
{
    public function __construct(
        protected TeacherRepositoryInterface $repository
    ) {}

    public function create(TeacherDto $dto): Teacher
    {
        return $this->repository->create($dto);
    }

    public function update(Teacher $teacher, TeacherDto $dto): Teacher
    {
        return $this->repository->update($teacher, $dto);
    }
}