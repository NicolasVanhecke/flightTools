<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if( !isset( $pilot ) )
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
                    <h1>Edit pilot details</h1>
                    <br/>

                    <p><a href="{{ route( 'admin.pilots.index' ) }}">Back to list</a></p>
                    <br/>

                    @if( !isset( $pilot ) )
                    <form action="{{ route( 'admin.pilots.store' ) }}" method="POST">
					    @method( 'POST' )
				    @else
                    <form action="{{ route( 'admin.pilots.update', $pilot->id ) }}" method="POST">
					    @method( 'PUT' )
				    @endif

					    @csrf
						<div class="form-group">
							<input type="text" class="form-control" name="code" placeholder="Code"
							value="{{ old( 'code' ) }}">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="first_name" placeholder="Firstname"
							value="{{ old( 'first_name' ) }}">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="last_name" placeholder="Lastname"
							value="{{ old( 'last_name' ) }}">
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="rank" id="radioRankCP" value="CP">
							<label class="form-check-label" for="radioRankCP">
								Captain
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="rank" id="radioRankFO" value="FO">
							<label class="form-check-label" for="radioRankFO">
								First Officer
							</label>
						</div>
						<div class="form-group">
							<select name="station" class="form-control">
								@foreach( $stations as $station )
									<option value='{{ $station }}'>{{ $station }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select name="qualified_aircrafts" class="form-control">
								@foreach( $aircrafts as $aircraft )
									<option value="{{ $aircraft }}">{{ $aircraft }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email"
							value="{{ old( 'email' ) }}">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
