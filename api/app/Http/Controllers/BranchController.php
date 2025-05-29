<?php

namespace App\Http\Controllers;

use App\Services\BranchService;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function __construct(
        protected BranchService $service
    ) {}

    public function index()
    {
        return response()->json($this->service->listAll());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'level' => 'required|in:primary,secondary,high',
            'is_active' => 'boolean'
        ]);

        return response()->json($this->service->create($validated), 201);
    }
}
