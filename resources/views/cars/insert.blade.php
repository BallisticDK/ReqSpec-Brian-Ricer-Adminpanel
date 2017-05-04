@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('cars.store') }} " enctype="multipart/form-data">

		<div class="form-group">
			<label for="manufacturer" class="control-label">Manufacturer</label>
			<select name="manufacturer" id="manufacturer" class="form-control">
				@foreach($manufacturers as $manufacturer)
					<option value="{{$manufacturer->id}}">{{ $manufacturer->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="carmodel" class="control-label">Car model</label>
			<select name="carmodel" id="carmodelselector" class="form-control"></select>
		</div>

		<div class="form-group"> 
			<label for="ugliness" class="control-label">Ugliness</label>
			<input type="number" name="ugliness" class="form-control" min="1" max="10" value="1">
		</div>

		<div class="form-group"> 
			<label for="horsepower" class="control-label">Horsepower</label>
			<input type="number" name="horsepower" class="form-control" min="1" value="50">
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
	$(document).on('change', '#manufacturer', function()
 	{
 		ajaxGetModelsByManufacturer('{{ route('retrive.models') }}', '{{ csrf_token() }}', null);
 	});
 	$(window).on('load', function()
 	{
 		ajaxGetModelsByManufacturer('{{ route('retrive.models') }}', '{{ csrf_token() }}', null);
	});
</script>


@endsection
