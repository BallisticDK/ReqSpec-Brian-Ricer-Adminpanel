@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>Car Model ID</th>
			<th>Car Model Name</th>
			<th>Manufacturer</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
			@foreach ($carModels as $carModel)
				<tr>
					<td><a href="{{ route('manufacturers.manufacturer.show', $carModel) }}">{{ $carModel->id }}</a></td>
					<td><a href="{{ route('carmodels.carmodel.show', $carModel) }}">{{ $carModel->name }}</td>
					<td><a href="{{ route('carmodels.all') }}">{{ $carModel->manufacturer->name }}</td>
					<td>{{ Carbon\Carbon::parse($carModel->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($carModel->created_at)->format('d-m-Y') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection