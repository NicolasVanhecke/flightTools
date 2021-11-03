<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pilot: {{ $pilot->first_name . ' ' . $pilot->last_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex">
                        <div class="w-1/4">
                            <h1>Todo: think about content for sidebar</h1> <br/>
                            <a href="{{ route( 'admin.pilots.index' ) }}" class="text-blue-500 hover:text-blue-700">Back to list</a>
                        </div>

                        <div class="w-3/4 border-l-2 pl-8">
                            <div class="flex">
                                <div class="w-1/3">
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Code</span>
                                        {{ $pilot->code }}
                                    </p>
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Rank</span>
                                        {{ $pilot->rank }}
                                    </p>
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Email</span>
                                        {{ $pilot->email }}
                                    </p>
                                </div>
                                <div class="w-1/3">
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Firstname</span>
                                        {{ $pilot->first_name }}
                                    </p>
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Station</span>
                                        {{ $pilot->station }}
                                    </p>
                                </div>
                                <div class="w-1/3">
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Lastname</span>
                                        {{ $pilot->last_name }}
                                    </p>
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Qualified aircrafts</span>
                                        {{ $pilot->qualified_aircrafts }}
                                    </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
