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
					<td><a href="{{ route('manufacturers.manufacturer.show', $manufacturer) }}">{{ sizeof($manufacturer->carModels) }}</td>
					<td>{{ Carbon\Carbon::parse($manufacturer->updated_at)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($manufacturer->created_at)->format('d-m-Y') }}</td>
					<td><a href="{{route('manufacturers.manufacturer.edit', ['id' => $manufacturer->id])}}">Edit</a></td>
					<td>
						<form method="POST" action="{{ route('manufacturers.manufacturer.delete', ['id' => $manufacturer->id]) }}">
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