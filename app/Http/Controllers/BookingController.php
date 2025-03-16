<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function showForm()
    {
        return view('booknow');
    }


    public function submitBooking(Request $request)
    {

        $validated = $request->validate([
            'departure' => 'required|string',
            'destination' => 'required|string',
            'departure_date' => 'required|date',
            'return_date' => 'nullable|date',
            'passengers' => 'required|integer|min:1',
            'class' => 'required|string',
            'flight_type' => 'required|string',
        ]);

        return view('bookingconfirmation', compact('validated'));
    }
}
