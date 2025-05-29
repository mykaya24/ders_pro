<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBranchRequest;
use App\Http\Resources\BranchResource;
use App\Models\Branch;
use App\Services\BranchService;

class BranchController extends Controller
{
    public function __construct(protected BranchService $service) {}

    public function store(StoreBranchRequest $request)
    {
        $dto = $request->toDto();
        $branch = $this->service->create($dto);

        return new BranchResource($branch);
    }

    public function update(StoreBranchRequest $request, Branch $branch)
    {
        $dto = $request->toDto();
        $branch = $this->service->update($branch, $dto);

        return new BranchResource($branch);
    }
}