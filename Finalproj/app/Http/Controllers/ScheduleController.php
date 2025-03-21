<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Show the schedule
    public function show()
    {
        // Retrieve all schedules from the database
        $schedules = Schedule::all();
        
        // Return the schedule view and pass schedules data
        return view('schedule', compact('schedules'));
    }
}

