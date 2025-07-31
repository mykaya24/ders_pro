<?php

namespace App\Repositories\Eloquent;

use App\DataTransferObjects\CourseDto;
use App\Models\Course;
use App\Repositories\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    public function create(CourseDto $dto):Course
    {
        return Course::create([
            'name' => $dto->name,
            'description' => $dto->description,
        ]);
    }


    
    public function update(Course $course, CourseDto $dto): Course 
    {
        $course->update([
            'name' => $dto->name,
            'description' => $dto->description,
        ]);

        return $course;
    }
}