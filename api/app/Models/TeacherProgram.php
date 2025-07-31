<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherProgram extends Model
{

    protected $fillable = ['id','teacher_id','day','hour','workable','description'];

    protected $casts = [
        
    ];
}
