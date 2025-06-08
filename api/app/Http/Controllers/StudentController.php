<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Services\StudentService;

class StudentController extends Controller
{
    public function __construct(protected StudentService $service) {}

    public function store(StoreStudentRequest $request)
    {
        $dto = $request->toDto();
        $student = $this->service->create($dto);

        return new StudentResource($student);
    }

    public function update(StoreStudentRequest $request, Student $student)
    {
        $dto = $request->toDto();
        $updt = $this->service->update($student, $dto);

        return new StudentResource($updt);
    }
}