<?php

namespace App\DataTransferObjects;

class TeacherProgramDto
{
    public function __construct(
        public readonly ?int $id,
        public readonly ?int $teacher_id,
        public readonly ?int $day,
        public readonly ?int $hour,
        public readonly bool $workable,
        public readonly string $description
    ) {}
}