<?php

namespace App\Services;

use App\Models\Branch;
use App\Repositories\BranchRepositoryInterface;

class BranchService
{
    public function __construct(
        protected BranchRepositoryInterface $repository
    ) {}

    public function listAll()
    {
        return $this->repository->all();
    }

    public function create(array $data)
    {
        $data['level'] = Branch::from($data['level']);
        return $this->repository->create($data);
    }
}
