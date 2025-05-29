<?php

namespace App\Repositories;

use App\DataTransferObjects\BranchDto;
use App\Models\Branch;

interface BranchRepositoryInterface
{
    public function create(BranchDto $dto): Branch;
    public function update(Branch $branch, BranchDto $dto): Branch;
}