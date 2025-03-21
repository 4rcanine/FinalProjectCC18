<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    // Define which fields are mass assignable
    protected $fillable = ['student_id', 'status'];

    // Relationship with Student (assuming a Student model exists)
    public function student()
    {
        return $this->belongsTo(Student::class); // Assuming a Student model exists
    }
}
