@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('carmodels.store') }}">
		<div class="form-group">
			<label for="modelname" class="control-label">Model name</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label for="manufacturer" class="control-label">Manufacturer</label>
			<select name="manufacturer" class="form-control">
				@foreach($manufacturers as $manufacturer)
					<option value="{{$manufacturer->id}}">{{ $manufacturer->name }}</option>
				@endforeach
			</select>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group"> 
			<input class="btn btn-primary" type="submit" value="submit">
		</div>
	</form>


@endsection