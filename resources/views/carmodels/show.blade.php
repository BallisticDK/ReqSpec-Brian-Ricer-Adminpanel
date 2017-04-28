@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<h2>
			<a href="
				{{ route('manufacturers.manufacturer.show', $manufacturer) }}">
				{{ $manufacturer->name }}
			</a> 
			{{ $carModel->name }}
		</h2>
		<h3>{{ $carsCount }} cars</h3>
		<thead>
			<th>Car ID</th>
			<th>Car</th>
			<th>Ugliness level</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
			@foreach ($cars as $car)
				<tr>
					<td><a href="{{ route('cars.car.show', $car) }}">{{ $car->id }}</a></td>
					<td>
						<a href="{{ route('manufacturers.manufacturer.show', $car->manufacturer) }}">
							{{ $car->manufacturer->name }}
						</a>
						<a href="{{ route('manufacturers.manufacturer.show', $car->manufacturer) }}">
							{{ $car->carModel->name }}
						</a>
					</td>
					<td>{{ $car->ugliness }} / 10</td>
					<td>{{ Carbon\Carbon::parse($car->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($car->created_at)->format('d-m-Y') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection