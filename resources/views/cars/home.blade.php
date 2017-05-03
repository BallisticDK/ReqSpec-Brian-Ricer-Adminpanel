@extends('layouts.master')
@section('content')
{{ $cars->links() }}
	<table class="table table-striped">
		<thead>
			<th>Picture</th>
			<th>Car ID</th>
			<th>Car Manufacturer</th>
			<th>Car Model</th>
			<th>HorsePower</th>
			<th>Ugliness</th>
			<th>Updated at</th>
			<th>Created at</th>
			<th>Edit</th>
		</thead>
		<tbody>
			@foreach ($cars as $car)
				<tr>
					<td class="vert-align">
						@if($car->doesPictureExist($car->car_picture_path))
							<a href="{{ route('cars.car.show', $car) }}"><img src="{{ $car->car_picture_path }}" height="100"></a>
						@else
							<div class="fillerdiv"></div>
						@endif
					</td>
					<td class="vert-align"><a href="{{ route('cars.car.show', $car) }}">{{ $car->id }}</a></td>
					<td class="vert-align"><a href="{{ route('manufacturers.manufacturer.show', $car->manufacturer) }}">{{ $car->manufacturer->name }}</td>
					<td class="vert-align"><a href="{{ route('carmodels.carmodel.show', $car->carModel) }}">{{ $car->carModel->name }}</td>
					<td class="vert-align">{{ $car->horsepower }}</th>
					<td class="vert-align">{{ $car->ugliness }}</th>
					<td class="vert-align">{{ Carbon\Carbon::parse($car->updated_at)->format('d-m-Y') }}</td>
					<td class="vert-align">{{ Carbon\Carbon::parse($car->created_at)->format('d-m-Y') }}</td>
					<td class="vert-align"><a href="{{route('cars.car.edit', ['id' => $car->id])}}">Edit</a></td>
					<td class="vert-align">
						<form method="POST" action="{{ route('cars.car.delete', ['id' => $car->id]) }}">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<a href="#" onclick="$(this).closest('form').submit();">Delete</a>
						</form>
					</td>
				</tr>
			@endforeach

		</tbody>
	</table>
	{{ $cars->links() }}
@endsection