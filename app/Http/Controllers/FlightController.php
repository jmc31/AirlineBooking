<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function search(Request $request)
    {

        $validated = $request->validate([
            'departure' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'return_date' => 'nullable|date',
            'passengers' => 'required|integer|min:1',
            'class' => 'required|string',
            'flight_type' => 'required|string',
        ]);


        $query = Flight::query();


        $query->where('departure', 'like', '%' . $validated['departure'] . '%')
              ->where('destination', 'like', '%' . $validated['destination'] . '%')
              ->whereDate('departure_date', '=', $validated['departure_date']);


        if ($validated['flight_type'] === 'round-trip' && $validated['return_date']) {
            $query->whereDate('return_date', '=', $validated['return_date']);
        }


        $query->where('class', $validated['class']);


        $query->where('available_seats', '>=', $validated['passengers']);


        $flights = $query->get();


        return view('searchflight', compact('flights'));
    }
}
