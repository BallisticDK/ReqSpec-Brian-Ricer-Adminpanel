@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>Car ID</th>
			<th>Car Manufacturer</th>
			<th>Car Model</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
			@foreach ($cars as $car)
				<tr>
					<td><a href="{{ route('cars.car.show', $car) }}">{{ $car->id }}</a></td>
					<td><a href="{{ route('manufacturers.manufacturer.show', $car->manufacturer) }}">{{ $car->manufacturer->name }}</td>
					<td><a href="{{ route('carmodels.carmodel.show', $car->carModel) }}">{{ $car->carModel->name }}</td>
					<td>{{ Carbon\Carbon::parse($car->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($car->created_at)->format('d-m-Y') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection