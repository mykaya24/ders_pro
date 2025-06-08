<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use App\Services\TeacherService;

class TeacherController extends Controller
{
    public function __construct(protected TeacherService $service) {}

    public function store(StoreTeacherRequest $request)
    {
        $dto = $request->toDto();
        $branch = $this->service->create($dto);

        return new TeacherResource($branch);
    }

    public function update(StoreTeacherRequest $request, Teacher $teacher)
    {
        $dto = $request->toDto();
        $updt = $this->service->update($teacher, $dto);

        return new TeacherResource($updt);
    }
}