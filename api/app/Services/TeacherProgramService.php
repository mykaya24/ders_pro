<?php

namespace App\Services;

use App\DataTransferObjects\TeacherProgramDto;
use App\Models\TeacherProgram;
use App\Repositories\TeacherProgramRepositoryInterface;

class TeacherProgramService
{
    public function __construct(
        protected TeacherProgramRepositoryInterface $repository
    ) {}

    public function create(TeacherProgramDto $dto): TeacherProgram
    {
        return $this->repository->create($dto);
    }

    public function update(TeacherProgram $teacherProgram,TeacherProgramDto $dto): TeacherProgram
    {
        return $this->repository->update($teacherProgram, $dto);
    }
}