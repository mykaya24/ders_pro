<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = ['name', 'surname', 'adress', 'phone', 'is_working', 'user_id'];

    protected $casts = [
        'is_working' => 'boolean',
    ];
}
