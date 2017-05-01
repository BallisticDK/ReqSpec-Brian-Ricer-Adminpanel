@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('carmodels.carmodel.update', ['id' => $carModel->id]) }}">
	<input type="text" name="name" value="{{ $carModel->name }}">
	<select name="manufacturer">
		@foreach($manufacturers as $manufacturer)
			
			<option value="{{$manufacturer->id}}"
				@if($carModel->manufacturer_id == $manufacturer->id)
					selected
				@endif
			>{{ $manufacturer->name }}</option>
			
		@endforeach
	</select>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
	</form>


@endsection