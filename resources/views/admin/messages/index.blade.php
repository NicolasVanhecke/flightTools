<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="text-left border-b-4 px-4 py-2">Short</th>
                                <th class="text-left border-b-4 px-4 py-2">Start date</th>
                                <th class="text-left border-b-4 px-4 py-2">End date</th>
                                <th class="text-left border-b-4 px-4 py-2">Airport</th>
                                <th class="text-left border-b-4 px-4 py-2">Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $messages as $message )
                            <tr>
                                <td class="border-b-2 px-4 py-2"><a href="{{ url('/admin/messages/' . $message->id) }}"><b>{{ $message->short }}</b></a></td>
                                <td class="border-b-2 px-4 py-2">{{ $message->start_date }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $message->end_date }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $message->airport }}</td>
                                <td class="border-b-2 px-4 py-2">{{ $message->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
