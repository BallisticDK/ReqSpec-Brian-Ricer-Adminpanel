@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<h2>
			<a href="{{ route('manufacturers.manufacturer.show', $car) }}">{{ $car->manufacturer->name }}</a>
			<a href="{{ route('carmodels.carmodel.show', $car) }}">{{ $car->carModel->name }}</a>
		</h2>
		<h3></h3>
		<div class="text-center marginbottom">
			@if($car->doesPictureExist($car->car_picture_path))
				<img class="img-responsive" src="../{{ $car->car_picture_path }}" >
			@endif
		</div>
		<thead>
			<th>Car ID</th>
			<th>Car Manufacturer</th>
			<th>Car Model</th>
			<th>Horsepower</th>
			<th>Ugliness</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
				<tr>
					<td><a href="{{ route('cars.car.show', $car) }}">{{ $car->id }}</a></td>
					<td><a href="{{ route('manufacturers.manufacturer.show', $car) }}">{{ $car->manufacturer->name }}</a></td>
					<td><a href="{{ route('carmodels.carmodel.show', $car) }}">{{ $car->carModel->name }}</a></td>
					<td>{{ $car->horsepower }} hp</th>
					<td>{{$car->ugliness}} /10</th>
					<td>{{ Carbon\Carbon::parse($car->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($car->created_at)->format('d-m-Y') }}</td>
				</tr>
		</tbody>
	</table>
@endsection