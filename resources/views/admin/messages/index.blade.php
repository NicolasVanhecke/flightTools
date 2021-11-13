<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="container mx-auto">
                 <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4" href="{{ route( 'admin.messages.create' ) }}">
                    New message
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="text-left border-b-4 px-4 py-2">Short</th>
                                <th class="text-left border-b-4 px-4 py-2">Airport</th>
                                <th class="text-left border-b-4 px-4 py-2">Start date</th>
                                <th class="text-left border-b-4 px-4 py-2">End date</th>
                                <th class="text-left border-b-4 px-4 py-2">Status</th>
                                <th class="text-left border-b-4 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $messages as $message )
                            <tr>
                                <td class="border-b-2 px-4 py-2">
                                    <a href="{{ route( 'admin.messages.show', $message->id) }}" class="text-blue-500 hover:text-blue-700 mr-4">{{ $message->short }}</a>
                                </td>
                                <td class="border-b-2 px-4 py-2">{{ $message->airport }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $message->start_date }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $message->end_date }}</td>
                                <td class="border-b-2 px-4 py-2">
                                    @if( $message->status === 'draft' )
                                        <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-yellow-100 bg-yellow-600 rounded-full">{{ $message->status }}</span>
                                    @elseif( $message->status === 'published' )
                                        <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-green-100 bg-green-600 rounded-full">{{ $message->status }}</span>
                                    @elseif( $message->status === 'expired' )
                                        <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">{{ $message->status }}</span>
                                    @endif
                                </td>
                                <td class="border-b-2 px-4 py-2">
                                    <a class="text-blue-500 hover:text-blue-700 mr-4" href="{{ route( 'admin.messages.edit', $message->id ) }}">Edit</a>
                                    <form action="{{ route( 'admin.messages.destroy', $message->id ) }}" method="POST">
                                        @csrf
                                        @method( 'DELETE' )
                                        <button class="text-gray-500 hover:text-gray-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="my-2">
                        {!! $messages->links() !!}                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
