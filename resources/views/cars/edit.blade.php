@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('cars.car.update', ['id' => $car->id])}}" enctype="multipart/form-data">
	<select name="manufacturer">
		@foreach($manufacturers as $manufacturer)
			<option value="{{$manufacturer->id}}"

			@if($manufacturer->id == $car->manufacturer_id)
				selected
			@endif

			>{{ $manufacturer->name }}</option>
		@endforeach
	</select>

	<select name="carmodel">
		@foreach($carModels as $carModel)
			<option value="{{$carModel->id}}"

				@if($carModel->id == $car->car_model_id)
				selected
				@endif

			>{{ $carModel->name }}</option>
		@endforeach
	</select>
	<input type="number" name="ugliness" min="1" max="10" value="{{ $car->ugliness }}">
	<input type="number" name="horsepower" min="1" value="{{ $car->horsepower }}">
	<input type="file" name="carpicture">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
	</form>


@endsection