<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Services\CourseService;

class CourseController extends Controller
{
    public function __construct(protected CourseService $service) {}

    public function store(StoreCourseRequest $request)
    {
        $dto = $request->toDto();
        $course = $this->service->create($dto);

        return new CourseResource($course);
    }

    public function update(StoreCourseRequest $request, Course $course)
    {
        $dto = $request->toDto();
        $updt = $this->service->update($course, $dto);

        return new CourseResource($updt);
    }
}