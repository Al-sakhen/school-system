<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'role_id',
    ];


    public function classes()
    {
        return $this->hasMany(SClass::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class, 'student_teacher');
    }

}
