<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Flight - Airline Ticketing</title>
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

    <!-- Search Flight Section -->
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">Search for Flights</h2>

        <!-- Flight Search Form -->
        <form action="{{ route('searchflight.submit') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Departure</label>
                    <input type="text" name="departure" class="w-full p-3 border rounded-lg" placeholder="Enter city or airport" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Destination</label>
                    <input type="text" name="destination" class="w-full p-3 border rounded-lg" placeholder="Enter city or airport" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Departure Date</label>
                    <input type="date" name="departure_date" class="w-full p-3 border rounded-lg" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Return Date (Optional)</label>
                    <input type="date" name="return_date" class="w-full p-3 border rounded-lg">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Passengers</label>
                    <input type="number" name="passengers" min="1" class="w-full p-3 border rounded-lg" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Class</label>
                    <select name="class" class="w-full p-3 border rounded-lg">
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first">First Class</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Flight Type</label>
                    <select name="flight_type" class="w-full p-3 border rounded-lg">
                        <option value="one-way">One Way</option>
                        <option value="round-trip">Round Trip</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Search Flights</button>
        </form>

        <!-- Search Results Section -->
        @if(isset($flights) && $flights->isNotEmpty())
            <div class="mt-10">
                <h3 class="text-xl font-semibold">Available Flights</h3>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($flights as $flight)
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h4 class="text-lg font-bold">{{ $flight->departure }} to {{ $flight->destination }}</h4>
                            <p class="text-gray-600">{{ $flight->departure_date }}</p>
                            <p class="text-gray-600">Class: {{ ucfirst($flight->class) }}</p>
                            <p class="text-gray-600">Seats Available: {{ $flight->available_seats }}</p>
                            <p class="text-gray-600">Flight Type: {{ ucfirst($flight->flight_type) }}</p>
                            <a href="{{ route('booknow') }}" class="mt-4 block bg-blue-600 text-white p-2 rounded-lg text-center hover:bg-blue-700">Book Now</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif(isset($flights))
            <div class="mt-10 text-red-600">No flights found based on your search criteria.</div>
        @endif
    </div>
</body>
</html>
