<?php

namespace App\Services;

use App\DataTransferObjects\CourseDto;
use App\Models\Course;
use App\Repositories\CourseRepositoryInterface;

class CourseService
{
    public function __construct(
        protected CourseRepositoryInterface $repository
    ) {}

    public function create(CourseDto $dto): Course
    {
        return $this->repository->create($dto);
    }

    public function update(Course $course, CourseDto $dto): Course
    {
        return $this->repository->update($course, $dto);
    }
}