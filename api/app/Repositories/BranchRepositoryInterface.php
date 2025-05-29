<?php

namespace App\Repositories;

use App\Models\Branch;

interface BranchRepositoryInterface
{
    public function all();
    public function find(int $id): ?Branch;
    public function create(array $data): Branch;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
