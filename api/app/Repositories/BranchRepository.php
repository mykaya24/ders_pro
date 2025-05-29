<?php

namespace App\Repositories;

use App\Models\Branch;

class BranchRepository implements BranchRepositoryInterface
{
    public function all()
    {
        return Branch::all();
    }

    public function find(int $id): ?Branch
    {
        return Branch::find($id);
    }

    public function create(array $data): Branch
    {
        return Branch::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $class = Branch::findOrFail($id);
        return $class->update($data);
    }

    public function delete(int $id): bool
    {
        return Branch::destroy($id);
    }
}
