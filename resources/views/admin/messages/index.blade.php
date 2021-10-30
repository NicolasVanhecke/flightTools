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
                    <h1>All messages</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Short</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Airport</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $messages as $message )
                            <tr>
                                <td><a href="{{ url('/admin/messages/' . $message->id) }}">{{ $message->short }}</a></td>
                                <td>{{ $message->start_date }}</td>
                                <td>{{ $message->end_date }}</td>
                                <td>{{ $message->airport }}</td>
                                <td>{{ $message->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
