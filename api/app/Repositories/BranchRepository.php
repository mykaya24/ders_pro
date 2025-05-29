<?php

namespace App\Repositories\Eloquent;

use App\DataTransferObjects\BranchDto;
use App\Models\Branch;
use App\Repositories\BranchRepositoryInterface;

class BranchRepository implements BranchRepositoryInterface
{
    public function create(BranchDto $dto): Branch
    {
        return Branch::create([
            'name' => $dto->name,
            'is_active' => $dto->is_active,
            'branch_teacher_id' => $dto->branch_teacher_id,
        ]);
    }

    public function update(Branch $branch, BranchDto $dto): Branch
    {
        $branch->update([
            'name' => $dto->name,
            'is_active' => $dto->is_active,
            'branch_teacher_id' => $dto->branch_teacher_id,
        ]);

        return $branch;
    }
}