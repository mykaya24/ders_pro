<?php

namespace App\Repositories\Eloquent;

use App\DataTransferObjects\TeacherProgramDto;
use App\Models\TeacherProgram;
use App\Repositories\TeacherProgramRepositoryInterface;

class TeacherProgramRepository implements TeacherProgramRepositoryInterface
{
    public function create(TeacherProgramDto $dto):TeacherProgram
    {
        return TeacherProgram::create([
            'teacher_id' => $dto->teacher_id,
            'day' => $dto->day,
            'hour' => $dto->hour,
            'workable' => $dto->workable,
            'description' => $dto->description,
        ]);
    }


    
    public function update(TeacherProgram $teacherProgram, TeacherProgramDto $dto): TeacherProgram 
    {
        $teacherProgram->update([
            'teacher_id' => $dto->teacher_id,
            'day' => $dto->day,
            'hour' => $dto->hour,
            'workable' => $dto->workable,
            'description' => $dto->description,
        ]);

        return $teacherProgram;
    }
}