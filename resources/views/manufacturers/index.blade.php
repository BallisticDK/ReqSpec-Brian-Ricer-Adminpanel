@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>Manufacturer ID</th>
			<th>Manufacturer Name</th>
			<th>Car Models</th>
			<th>Updated at</th>
			<th>Created at</th>
		</thead>
		<tbody>
			@foreach ($manufacturers as $manufacturer)
				<tr>
					<td><a href="{{ route('manufacturers.manufacturer.show', $manufacturer) }}">{{ $manufacturer->id }}</a></td>
					<td><a href="{{ route('manufacturers.manufacturer.show', $manufacturer) }}">{{ $manufacturer->name }}</td>
					<td><a href="{{ route('carmodels.carmodel.show', $manufacturer->carModel) }}">{{ $manufacturer->carModels("count") }}</td>
					<td>{{ Carbon\Carbon::parse($manufacturer->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($manufacturer->created_at)->format('d-m-Y') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection