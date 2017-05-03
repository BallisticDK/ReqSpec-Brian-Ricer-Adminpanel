@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<h2>
			<a href="
				{{ route('manufacturers.manufacturer.show', $manufacturer) }}">
				{{ $manufacturer->name }}
			</a> 
		</h2>
		<h3>{{ $carModelCount }} Models</h3>
		<thead>
			<th>Car ID</th>
			<th>Car</th>
			<th>Horsepower</th>
			<th>Ugliness level</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
			@foreach($carModelss as $carModel)
				<tr>
					<td><a href="{{ route('carmodels.carmodel.show', $carModel) }}">{{ $carModel->id }}</a></td>
					<td>
						<a href="{{ route('manufacturers.manufacturer.show', $carModel->manufacturer) }}">
							{{ $car->manufacturer->name }}
						</a>
						<a href="{{ route('manufacturers.manufacturer.show', $carModel->manufacturer) }}">
							{{ $carModel->name }}
						</a>
					</td>
					<td>{{ Carbon\Carbon::parse($carModel->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($carModel->created_at)->format('d-m-Y') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection