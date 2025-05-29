<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';

    protected $fillable = ['name', 'is_active', 'branch_teacher_id'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
