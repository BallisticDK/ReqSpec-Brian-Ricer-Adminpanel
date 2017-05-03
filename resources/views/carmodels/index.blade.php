@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>Car Model ID</th>
			<th>Car Model Name</th>
			<th>Manufacturer</th>
			<th>Updated at</th>
			<th>Created at</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach ($carModels as $carModel)
				<tr>
					<td><a href="{{ route('carmodels.carmodel.show', $carModel) }}">{{ $carModel->id }}</a></td>
					<td><a href="{{ route('carmodels.carmodel.show', $carModel) }}">{{ $carModel->name }}</td>
					<td><a href="{{ route('manufacturers.manufacturer.show', $carModel->manufacturer->id) }}">{{ $carModel->manufacturer->name }}</td>
					<td>{{ Carbon\Carbon::parse($carModel->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($carModel->created_at)->format('d-m-Y') }}</td>
					<td><a href="{{route('carmodels.carmodel.edit', ['id' => $carModel->id])}}">Edit</a></td>
					<td>
						<form method="POST" action="{{ route('carmodels.carmodel.delete', ['id' => $carModel->id]) }}">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<a href="#" onclick="$(this).closest('form').submit();">Delete</a>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection