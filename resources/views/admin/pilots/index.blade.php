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

                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="text-left border-b-4 px-4 py-2">Code</th>
                                <th class="text-left border-b-4 px-4 py-2">Firstname</th>
                                <th class="text-left border-b-4 px-4 py-2">Lastname</th>
                                <th class="text-left border-b-4 px-4 py-2">Rank</th>
                                <th class="text-left border-b-4 px-4 py-2">Station</th>
                                <th class="text-left border-b-4 px-4 py-2">Email</th>
                                <th class="text-left border-b-4 px-4 py-2">Created at</th>
                                <th class="text-left border-b-4 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $pilots as $pilot )
                            <tr>
                                <td class="border-b-2 px-4 py-2">
                                    <a href="{{ route( 'admin.pilots.show', $pilot->id ) }}">{{ $pilot->code }}</a>
                                </td>
                                <td class="border-b-2 px-4 py-2">{{ $pilot->first_name }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $pilot->last_name }}</td>
                                <td class="border-b-2 px-4 py-2">{{ ( $pilot->rank === 'CP' ) ? 'Captain' : 'First Officer' }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $pilot->station }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $pilot->email }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $pilot->created_at }}</td>
                                <td class="border-b-2 px-4 py-2 flex">
                                    <a class="text-blue-500 hover:text-blue-700 mr-4" href="{{ route( 'admin.pilots.edit', $pilot->id ) }}">Edit</a>
                                    <form action="{{ route( 'admin.pilots.destroy', $pilot->id ) }}" method="POST">
                                        @csrf
                                        @method( 'DELETE' )
                                        <button class="text-gray-500 hover:text-gray-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
