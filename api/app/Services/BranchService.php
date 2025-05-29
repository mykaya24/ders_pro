<?php

namespace App\Services;

use App\DataTransferObjects\BranchDto;
use App\Models\Branch;
use App\Repositories\BranchRepositoryInterface;

class BranchService
{
    public function __construct(
        protected BranchRepositoryInterface $repository
    ) {}

    public function create(BranchDto $dto): Branch
    {
        return $this->repository->create($dto);
    }

    public function update(Branch $branch, BranchDto $dto): Branch
    {
        return $this->repository->update($branch, $dto);
    }
}