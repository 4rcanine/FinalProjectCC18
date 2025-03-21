<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // Show enrollment form
    public function showForm()
    {
        return view('enroll');
    }

    // Store the enrollment data
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'course_name' => 'required|string|max:255',
            'student_id' => 'required|integer|exists:students,id', // Assuming a Student model exists
        ]);

        // Create the enrollment record in the database
        Enrollment::create([
            'course_name' => $validated['course_name'],
            'student_id' => $validated['student_id'],
        ]);

        // Redirect back with success message
        return redirect()->route('home')->with('success', 'Enrollment created successfully!');
    }
}
