@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('cars.car.update', ['id' => $car->id])}}" enctype="multipart/form-data">
	
		<div class="form-group">
			<label for="manufacturer" class="control-label">Manufacturer</label>
			<select name="manufacturer" id="manufacturer" class="form-control">
				@foreach($manufacturers as $manufacturer)
					<option value="{{$manufacturer->id}}"
					@if($manufacturer->id == $car->manufacturer_id)
						selected
					@endif
					>{{ $manufacturer->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="carmodel" class="control-label">Car model</label>
			<select name="carmodel" id="carmodelselector" class="form-control"></select>
		</div>

		<div class="form-group"> 
			<label for="ugliness" class="control-label">Ugliness</label>
			<input type="number" name="ugliness" class="form-control" min="1" max="10" value="{{ $car->ugliness }}">
		</div>

		<div class="form-group"> 
			<label for="horsepower" class="control-label">Horsepower</label>
			<input type="number" name="horsepower" class="form-control" min="1" value="{{ $car->horsepower }}">
		</div>

		<div class="form-group"> 
			<label for="carpicture" class="control-label">Picture</label>
			<input type="file" class="form-control" name="carpicture">
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group"> 
			<input type="submit" class="btn btn-primary" value="Submit">
		</div>
	</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript">

	var modelId = {{ $car->car_model_id }};
	$(document).on('change', '#manufacturer', function()
 	{
 		ajaxGetModelsByManufacturer('{{ route('retrive.models') }}', '{{ csrf_token() }}', null);
 	});

 	$(window).on('load', function()
 	{
 		ajaxGetModelsByManufacturer('{{ route('retrive.models') }}', '{{ csrf_token() }}', modelId);
	});
</script>
@endsection