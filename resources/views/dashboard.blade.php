<x-app-layout>
    <div class="p-6 bg-gray-100 min-h-screen">
        <!-- Page Header -->
        <div class="bg-white shadow-md p-4 rounded-md">
            <h2 class="text-2xl font-semibold text-gray-700">Dashboard</h2>
            <p class="text-gray-500">Welcome to your Airline Ticketing System</p>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white p-6 rounded-md shadow-md">
                <h3 class="text-xl font-semibold text-blue-600">Total Bookings</h3>
                <p class="text-3xl font-bold mt-2">1,235</p>
            </div>

            <div class="bg-white p-6 rounded-md shadow-md">
                <h3 class="text-xl font-semibold text-green-600">Upcoming Flights</h3>
                <p class="text-3xl font-bold mt-2">24</p>
            </div>

            <div class="bg-white p-6 rounded-md shadow-md">
                <h3 class="text-xl font-semibold text-red-600">Total Revenue</h3>
                <p class="text-3xl font-bold mt-2">$15,230</p>
            </div>
        </div>

        <!-- Recent Bookings Table -->
        <div class="bg-white shadow-md p-6 rounded-md mt-6">
            <h3 class="text-xl font-semibold mb-4">Recent Bookings</h3>
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-3 text-left">Passenger</th>
                        <th class="p-3 text-left">Flight</th>
                        <th class="p-3 text-left">Date</th>
                        <th class="p-3 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-3">John Doe</td>
                        <td class="p-3">Manila ✈ Cebu</td>
                        <td class="p-3">2025-03-20</td>
                        <td class="p-3 text-green-600 font-semibold">Confirmed</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Jane Smith</td>
                        <td class="p-3">Cebu ✈ Davao</td>
                        <td class="p-3">2025-03-22</td>
                        <td class="p-3 text-yellow-600 font-semibold">Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
