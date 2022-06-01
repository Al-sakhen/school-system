<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_date',
        'guardian_number',
        'password',
        'email',
        'first_term_mark',
        'mid_term_mark',
        'final_term_mark',
        'role_id'
    ];

    public function teachers(){
        return $this->belongsToMany(Teacher::class, 'student_teacher');
    }

    public function classes(){
        return $this->belongsToMany(SClass::class, 'class_student');
    }

}
