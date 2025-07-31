<?php

namespace App\Repositories;

use App\DataTransferObjects\CourseDto;
use App\Models\Course;

interface CourseRepositoryInterface
{
    public function create(CourseDto $dto): Course;
    public function update(Course $course, CourseDto $dto): Course;
}