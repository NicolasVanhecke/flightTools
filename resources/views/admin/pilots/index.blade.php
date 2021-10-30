<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pilots') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>All pilots</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Rank</th>
                                <th>Station</th>
                                <th>Qualified aircrafts</th>
                                <th>Email</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $pilots as $pilot )
                            <tr>
                                <td><a href="{{ url('/admin/pilots/' . $pilot->id) }}">{{ $pilot->code }}</a></td>
                                <td>{{ $pilot->first_name }}</td>
                                <td>{{ $pilot->last_name }}</td>
                                <td>{{ $pilot->rank }}</td>
                                <td>{{ $pilot->station }}</td>
                                <td>{{ $pilot->qualified_aircrafts }}</td>
                                <td>{{ $pilot->email }}</td>
                                <td>{{ $pilot->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
