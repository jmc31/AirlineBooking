<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - Airline Ticketing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold">Airline Ticketing</h1>
            <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
        </div>
    </nav>

    <!-- Booking Confirmation Section -->
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">Booking Confirmation</h2>

        <div class="space-y-4">
            <p><strong>Departure:</strong> {{ $validated['departure'] }}</p>
            <p><strong>Destination:</strong> {{ $validated['destination'] }}</p>
            <p><strong>Departure Date:</strong> {{ $validated['departure_date'] }}</p>
            <p><strong>Return Date:</strong> {{ $validated['return_date'] ?? 'N/A' }}</p>
            <p><strong>Passengers:</strong> {{ $validated['passengers'] }}</p>
            <p><strong>Class:</strong> {{ ucfirst($validated['class']) }}</p>
            <p><strong>Flight Type:</strong> {{ ucfirst($validated['flight_type']) }}</p>
        </div>

        <a href="{{ route('booknow') }}" class="mt-6 inline-block bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Book Another Flight</a>
    </div>

</body>
</html>
