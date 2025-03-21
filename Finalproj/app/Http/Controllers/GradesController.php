<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    // Show grades information
    public function show()
    {
        // Retrieve all grades from the database
        $grades = Grade::all();
        
        // Return grades view and pass grades data
        return view('grades', compact('grades'));
    }
}

