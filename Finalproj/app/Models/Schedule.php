<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    // Define which fields are mass assignable
    protected $fillable = ['course_name', 'day', 'start_time', 'end_time'];
}
