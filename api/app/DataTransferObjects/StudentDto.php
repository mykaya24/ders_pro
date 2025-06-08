<?php

namespace App\DataTransferObjects;

class StudentDto
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $tc,
        public readonly string $student_number,
        public readonly string $name,
        public readonly string $surname,
        public readonly string $adress,
        public readonly string $phone,
        public readonly bool $is_active,
        public readonly int $user_id,
    ) {}
}