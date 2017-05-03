@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<h2>{{ $manufacturer->name }} car models</h2>
		<h3>{{ $carsCount }} cars</h3>
		<thead>
			<th>Car Model ID</th>
			<th>Car Model</th>
			<th>Cars</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
			@foreach ($carModels as $carModel)
				<tr>
					<td><a href="{{ route('carmodels.carmodel.show', $carModel) }}">{{ $carModel->id }}</a></td>
					<td><a href="{{ route('carmodels.carmodel.show', $carModel) }}">{{ $carModel->name }}</a></td>
					<td><a href="{{ route('carmodels.carmodel.show', $carModel) }}">{{ sizeof($carModel->cars) }}</a></td>
					<td>{{ Carbon\Carbon::parse($carModel->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($carModel->created_at)->format('d-m-Y') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection