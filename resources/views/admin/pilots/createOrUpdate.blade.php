<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if( !$pilot->exists )
            	Pilot create
		    @else
            	Pilot edit: {{ $pilot->first_name . ' ' . $pilot->last_name }}
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
                    		<a href="{{ route( 'admin.pilots.index' ) }}" class="text-blue-500 hover:text-blue-700">Back to list</a>
						</div>

						<div class="w-3/4 border-l-2 pl-8">
		                    @if( !$pilot->exists )
		                    	<form action="{{ route( 'admin.pilots.store' ) }}" method="POST">
							    @method( 'POST' )
						    @else
		                    	<form action="{{ route( 'admin.pilots.update', $pilot->id ) }}" method="POST">
							    @method( 'PUT' )
						    @endif

							    @csrf
							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="code">Code</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="code" type="text" placeholder="Code" value="{{ $pilot->code ?? old( 'code' ) }}">
							    </div>
							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">Firstname</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="first_name" type="text" placeholder="Firstname" value="{{ $pilot->first_name ?? old( 'first_name' ) }}">
							    </div>
							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">Lastname</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="last_name" type="text" placeholder="Lastname" value="{{ $pilot->last_name ?? old( 'last_name' ) }}">
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
									<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
									name="email" type="text" placeholder="Email" value="{{ $pilot->email ?? old( 'email' ) }}">
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="station">Station</label>
									<div class="relative">
										<select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded" id="grid-state">
											@foreach( $stations as $station )
												<option value='{{ $station }}' {{ ( $pilot->station === $station ) ? 'selected' : '' }}>{{ $station }}</option>
											@endforeach
										</select>
									</div>
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="station">Aircraft</label>
									<div class="relative">
										<select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded" id="grid-state">
											@foreach( $aircrafts as $aircraft )
												<option value='{{ $aircraft }}'>{{ $aircraft }}</option>
											@endforeach
										</select>
									</div>
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2">Rank</label>		
									<label class="inline-flex items-center mr-4">
										<input type="radio" class="form-radio" name="rank" value="CP" {{ ( $pilot->rank === 'CP' ) ? 'checked' : '' }} />
										<span class="ml-2">Captain</span>
									</label>
									<label class="inline-flex items-center">
										<input type="radio" class="form-radio" name="rank" value="FO" {{ ( $pilot->rank === 'FO' ) ? 'checked' : '' }} />
										<span class="ml-2">First Officer</span>
									</label>
							    </div>

							    <div class="mb-4">
									<label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status</label>
									<div class="relative">
										<select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded" name="status">
											@foreach( $statuses as $status )
												<option value='{{ $status }}' {{ ( $message->status === $status ) ? 'selected' : '' }} >{{ $status }}</option>
											@endforeach
										</select>
									</div>
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
