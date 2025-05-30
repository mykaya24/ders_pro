<?php

namespace App\Enums;

enum UserActor: string
{
    case TEACHER = 'TEACHER';
    case STUDENT = 'STUDENT';
    case MANAGER = 'MANAGER';
    case PARENT = 'PARENT';
}