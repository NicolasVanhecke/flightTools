<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Flights') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>All flights</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>FlightNr</th>
                                <th>CommercialNr</th>
                                <th>Departure</th>
                                <th>Arrival</th>
                                <th>STD</th>
                                <th>STA</th>
                                <th>Last update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $flights as $flight )
                            <tr>
                                <td><a href="{{ url('/admin/flights/' . $flight->id) }}">{{ $flight->flight_number }}</a></td>
                                <td>{{ $flight->commercial_number }}</td>
                                <td>{{ $flight->departure }}</td>
                                <td>{{ $flight->arrival }}</td>
                                <td>{{ $flight->std }}</td>
                                <td>{{ $flight->sta }}</td>
                                <td>{{ $flight->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
