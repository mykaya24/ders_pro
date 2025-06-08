<?php

namespace App\Repositories;

use App\DataTransferObjects\TeacherDto;
use App\Models\Teacher;

interface TeacherRepositoryInterface
{
    public function create(TeacherDto $dto): Teacher;
    public function update(Teacher $teacher, TeacherDto $dto): Teacher;
}