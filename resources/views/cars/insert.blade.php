@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('cars.store') }} " enctype="multipart/form-data">
	<select name="manufacturer">
		@foreach($manufacturers as $manufacturer)
			<option value="{{$manufacturer->id}}">{{ $manufacturer->name }}</option>
		@endforeach
	</select>

	<select name="carmodel">
		@foreach($carModels as $carModel)
			<option value="{{$carModel->id}}">{{ $carModel->name }}</option>
		@endforeach
	</select>
	<input type="number" name="ugliness" min="1" max="10" value="1">
	<input type="number" name="horsepower" min="1" value="50">
	<input type="file" name="carpicture">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
	</form>


@endsection