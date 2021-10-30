<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Flight') }} -->
            Flight: {{ $flight->flightNumber }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Flight detail</h1>
                    <br/>

                    <p><a href="{{ url('/admin/flights/' ) }}">Back to list</a></p>
                    <br/>

                    <p>FlightNr: {{ $flight->flightNumber }}</p>
                    <p>CommercialNr: {{ $flight->commercialNumber }}</p>
                    <p>Departure: {{ $flight->departure }}</p>
                    <p>Arrival: {{ $flight->arrival }}</p>
                    <p>STD: {{ $flight->std }}</p>
                    <p>STA: {{ $flight->sta }}</p>
                    <p>Updated at: {{ $flight->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
