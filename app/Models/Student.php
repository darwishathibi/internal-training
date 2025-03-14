<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'matric-no',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses', 'student_id', 'course_id')
    }
}
