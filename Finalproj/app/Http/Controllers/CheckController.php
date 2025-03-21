<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    // Show the status or check view
    public function show()
    {
        // Example: Retrieve all check statuses from the database
        $checks = Check::all();
        
        // Return check view and pass checks data
        return view('check', compact('checks'));
    }
}
