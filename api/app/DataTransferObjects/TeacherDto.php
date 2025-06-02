<?php

namespace App\DataTransferObjects;

class TeacherDto
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly string $surname,
        public readonly string $adress,
        public readonly string $phone,
        public readonly bool $is_working,
        public readonly int $user_id,
    ) {}
}