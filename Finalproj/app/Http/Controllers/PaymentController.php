<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Show payment form
    public function showPaymentForm()
    {
        return view('payment');
    }

    // Handle the payment submission
    public function processPayment(Request $request)
    {
        // Validate the payment data
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'student_id' => 'required|integer|exists:students,id', // Assuming a Student model exists
        ]);

        // Create a new payment record
        Payment::create([
            'amount' => $validated['amount'],
            'student_id' => $validated['student_id'],
            'status' => 'pending', // Default status
        ]);

        // Redirect back with success message
        return redirect()->route('payment')->with('success', 'Payment processed successfully!');
    }
}

