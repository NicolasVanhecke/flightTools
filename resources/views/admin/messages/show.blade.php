<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Message: {{ $message->short }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex">
                        <div class="w-1/4">
                            <h1>Todo: think about content for sidebar</h1> <br/>
                            <a href="{{ route( 'admin.messages.index' ) }}" class="text-blue-500 hover:text-blue-700">Back to list</a>
                        </div>

                        <div class="w-3/4 border-l-2 pl-8">
                            <div class="flex">
                                <div class="w-1/3">
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Airport</span>
                                        {{ $message->airport }}
                                    </p>
                                </div>
                                <div class="w-1/3">
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">Start date</span>
                                        {{ $message->start_date }}
                                    </p>
                                </div>
                                <div class="w-1/3">
                                    <p class="text-gray-400 text-sm mb-2">
                                        <span class="text-gray-700 font-bold pr-2">End date</span>
                                        {{ $message->end_date }}
                                    </p>
                                </div>
                            </div>

                            <p class="text-gray-700 text-sm font-bold pr-2">Short</p>
                            <p class="text-gray-400 text-sm mb-2">{{ $message->short }}</p>
                            <p class="text-gray-700 text-sm font-bold pr-2">Full message</p>
                            <p class="text-gray-400 text-sm mb-2">{{ $message->body }}</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
