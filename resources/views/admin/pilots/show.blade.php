<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pilot: {{ $pilot->first_name . $pilot->last_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Pilot detail</h1>
                    <br/>

                    <p><a href="{{ url('/admin/pilots/' ) }}">Back to list</a></p>
                    <br/>

                    <p>Code: {{ $pilot->code }}</p>
                    <p>Firstname: {{ $pilot->first_name }}</p>
                    <p>Lastname: {{ $pilot->last_name }}</p>
                    <p>Rank: {{ $pilot->rank }}</p>
                    <p>Station: {{ $pilot->station }}</p>
                    <p>Qualified aircrafts: {{ $pilot->qualified_aircrafts }}</p>
                    <p>Email: {{ $pilot->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
