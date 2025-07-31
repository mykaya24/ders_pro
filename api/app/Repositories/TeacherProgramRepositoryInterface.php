<?php

namespace App\Repositories;

use App\DataTransferObjects\TeacherProgramDto;
use App\Models\TeacherProgram;

interface TeacherProgramRepositoryInterface
{
    public function create(TeacherProgramDto $dto): TeacherProgram;
    public function update(TeacherProgram $teacherProgram, TeacherProgramDto $dto): TeacherProgram;
}