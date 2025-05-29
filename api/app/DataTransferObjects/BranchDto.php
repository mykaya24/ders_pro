<?php

namespace App\DataTransferObjects;

class BranchDto
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly bool $is_active,
        public readonly int $branch_teacher_id,
    ) {}
}