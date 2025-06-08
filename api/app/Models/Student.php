<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = ['tc', 'student_number','name', 'surname', 'adress', 'phone', 'is_active', 'user_id'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
