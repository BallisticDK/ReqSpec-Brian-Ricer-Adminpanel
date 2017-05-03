@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<h2>
			<a href="{{ route('manufacturers.manufacturer.show', $manufacturer->id) }}">{{ $manufacturer->name }}</a> 
			{{ $carModel->name }}
		</h2>
		<h3>{{ $carsCount }} cars</h3>
		<thead>
			<th>Picture</th>
			<th>Car ID</th>
			<th>Car</th>
			<th>Horsepower</th>
			<th>Ugliness level</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
			@foreach($cars as $car)
				<tr>
					<td class="vert-align">
						@if($car->doesPictureExist($car->car_picture_path))
							<a href="{{ route('cars.car.show', $car) }}"><img src="../{{ $car->car_picture_path }}" height="100"></a>
						@else
							<div class="fillerdiv"></div>
						@endif
					</td>
					<td class="vert-align"><a href="{{ route('cars.car.show', $car) }}">{{ $car->id }}</a></td>
					<td class="vert-align">
						<a href="{{ route('manufacturers.manufacturer.show', $car->manufacturer) }}">
							{{ $car->manufacturer->name }}
						</a>
						<a href="{{ route('manufacturers.manufacturer.show', $car->manufacturer) }}">
							{{ $car->carModel->name }}
						</a>
					</td>
					<td class="vert-align">{{ $car->horsepower }}</td>
					<td class="vert-align">{{ $car->ugliness }} / 10</td>
					<td class="vert-align">{{ Carbon\Carbon::parse($car->updated_at)->format('d-m-Y') }}</td>
					<td class="vert-align">{{ Carbon\Carbon::parse($car->created_at)->format('d-m-Y') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection