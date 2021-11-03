<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if( !$message->exists )
            	Message create
		    @else
            	Message edit: {{ $message->short }}
		    @endif
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
		                    @if( !$message->exists )
		                    	<form action="{{ route( 'admin.messages.store' ) }}" method="POST">
							    @method( 'POST' )
						    @else
		                    	<form action="{{ route( 'admin.messages.update', $message->id ) }}" method="POST">
							    @method( 'PUT' )
						    @endif

							    @csrf
							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="station">Airport</label>
									<div class="relative">
										<select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded" name="airport">
											@foreach( $airports as $airport )
												<option value='{{ $airport }}' {{ ( $message->airport === $airport ) ? 'selected' : '' }} >{{ $airport }}</option>
											@endforeach
										</select>
									</div>
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="start_date">Start date</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="start_date" type="text" placeholder="Start date" value="{{ $message->start_date ?? old( 'start_date' ) }}">
							    </div>
							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="end_date">End date</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="end_date" type="text" placeholder="End date" value="{{ $message->end_date ?? old( 'end_date' ) }}">
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="short">Short</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="short" type="text" placeholder="Short" value="{{ $message->short ?? old( 'short' ) }}">
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="body">Message</label>
									<textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="body">{{ $message->body ?? old( 'body' ) }}</textarea>
							    </div>

							    <!-- Keep for when adding 'status' to messages -->
<!-- 							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2">Rank</label>		
									<label class="inline-flex items-center mr-4">
										<input type="radio" class="form-radio" name="rank" value="CP" {{ ( $message->rank === 'CP' ) ? 'checked' : '' }} />
										<span class="ml-2">Captain</span>
									</label>
									<label class="inline-flex items-center">
										<input type="radio" class="form-radio" name="rank" value="FO" {{ ( $message->rank === 'FO' ) ? 'checked' : '' }} />
										<span class="ml-2">First Officer</span>
									</label>
							    </div>
 -->
								<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
									Submit
								</button>
							</form>

						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
