<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if( !$flight->exists )
            	Flight create
		    @else
            	Flight edit: {{ $flight->short }}
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
                    		<a href="{{ route( 'admin.flights.index' ) }}" class="text-blue-500 hover:text-blue-700">Back to list</a>
						</div>

						<div class="w-3/4 border-l-2 pl-8">
		                    @if( !$flight->exists )
		                    	<form action="{{ route( 'admin.flights.store' ) }}" method="POST">
							    @method( 'POST' )
						    @else
		                    	<form action="{{ route( 'admin.flights.update', $flight->id ) }}" method="POST">
							    @method( 'PUT' )
						    @endif

							    @csrf

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="flight_number">Flight number</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="flight_number" type="text" placeholder="Flight number" value="{{ $flight->flight_number ?? old( 'flight_number' ) }}">
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="commercial_number">Commercial number</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="commercial_number" type="text" placeholder="Commercial number" value="{{ $flight->commercial_number ?? old( 'commercial_number' ) }}">
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="station">Departure</label>
									<div class="relative">
										<select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded" name="departure">
											@foreach( $airports as $airport )
												<option value='{{ $airport }}' {{ ( $flight->airport === $airport ) ? 'selected' : '' }} >{{ $airport }}</option>
											@endforeach
										</select>
									</div>
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="station">Arrival</label>
									<div class="relative">
										<select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded" name="arrival">
											@foreach( $airports as $airport )
												<option value='{{ $airport }}' {{ ( $flight->airport === $airport ) ? 'selected' : '' }} >{{ $airport }}</option>
											@endforeach
										</select>
									</div>
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="std">STD</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="std" type="text" placeholder="Scheduled time of departure" value="{{ $flight->std ?? old( 'std' ) }}">
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="std">STA</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="sta" type="text" placeholder="Scheduled time of arrival" value="{{ $flight->sta ?? old( 'sta' ) }}">
							    </div>

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
