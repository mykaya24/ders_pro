<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherProgramRequest;
use App\Http\Resources\TeacherProgramResource;
use App\Models\TeacherProgram;
use App\Services\TeacherProgramService;

class TeacherProgramController extends Controller
{
    public function __construct(protected TeacherProgramService $service) {}

    public function store(StoreTeacherProgramRequest $request)
    {
        $dto = $request->toDto();
        $teacher_program = $this->service->create($dto);

        return new TeacherProgramResource($teacher_program);
    }

    public function update(StoreTeacherProgramRequest $request, TeacherProgram $teacher_program)
    {
        $dto = $request->toDto();
        $updt = $this->service->update($teacher_program, $dto);

        return new TeacherProgramResource($updt);
    }
}