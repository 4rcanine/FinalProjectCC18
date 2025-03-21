<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // Define which fields are mass assignable
    protected $fillable = ['amount', 'student_id', 'status'];

    // Relationship with Student (assuming Student model exists)
    public function student()
    {
        return $this->belongsTo(Student::class); // Assuming a Student model exists
    }
}
