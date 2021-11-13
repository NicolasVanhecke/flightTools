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

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="text-left border-b-4 px-4 py-2">FlightNr</th>
                                <th class="text-left border-b-4 px-4 py-2">CommercialNr</th>
                                <th class="text-left border-b-4 px-4 py-2">Departure</th>
                                <th class="text-left border-b-4 px-4 py-2">Arrival</th>
                                <th class="text-left border-b-4 px-4 py-2">STD</th>
                                <th class="text-left border-b-4 px-4 py-2">STA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $flights as $flight )
                            <tr>
                                <td class="border-b-2 px-4 py-2">
                                    <a href="{{ route( 'flights.show', $flight->flight_number) }}" class="text-blue-500 hover:text-blue-700 mr-4">{{ $flight->flight_number }}</a>
                                </td>
                                <td class="border-b-2 px-4 py-2">{{ $flight->commercial_number }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $flight->departure }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $flight->arrival }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $flight->std }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $flight->sta }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="my-2">
                        {!! $flights->links() !!}                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
