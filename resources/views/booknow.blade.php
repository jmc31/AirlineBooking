<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - Airline Ticketing</title>
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

    <!-- Booking Section -->
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">Book Your Flight</h2>

        <!-- Booking Form -->
        <form action="{{ route('booknow.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Departure</label>
                    <input type="text" name="departure" class="w-full p-2 border rounded" placeholder="Enter city or airport">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Destination</label>
                    <input type="text" name="destination" class="w-full p-2 border rounded" placeholder="Enter city or airport">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Departure Date</label>
                    <input type="date" name="departure_date" class="w-full p-2 border rounded">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Return Date (Optional)</label>
                    <input type="date" name="return_date" class="w-full p-2 border rounded">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Passengers</label>
                    <input type="number" name="passengers" min="1" class="w-full p-2 border rounded">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Class</label>
                    <select name="class" class="w-full p-2 border rounded">
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first">First Class</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Flight Type</label>
                    <select name="flight_type" class="w-full p-2 border rounded">
                        <option value="one-way">One Way</option>
                        <option value="round-trip">Round Trip</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded hover:bg-blue-700">Search Flights</button>
        </form>
    </div>

</body>
</html>
