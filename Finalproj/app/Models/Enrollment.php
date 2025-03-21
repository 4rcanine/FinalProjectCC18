<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    // Define which fields are mass assignable
    protected $fillable = ['course_name', 'student_id'];

    // Define the relationship with the Student model (assuming a Student model exists)
    public function student()
    {
        return $this->belongsTo(Student::class); // Assuming Student model exists
    }
}

