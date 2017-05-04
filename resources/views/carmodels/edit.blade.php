@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('carmodels.carmodel.update', ['id' => $carModel->id]) }}">
		<div class="form-group">
			<label for="modelname" class="control-label">Model name</label>
			<input type="text" name="name" class="form-control" value="{{ $carModel->name }}">
		</div>
		<div class="form-group">
			<label for="manufacturer" class="control-label">Manufacturer</label>
			<select name="manufacturer" class="form-control">
				@foreach($manufacturers as $manufacturer)
					<option value="{{$manufacturer->id}}"
						@if($carModel->manufacturer_id == $manufacturer->id)
							selected
						@endif
					>{{ $manufacturer->name }}</option>			
				@endforeach
			</select>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<div class="form-group"> 
			<input type="submit" class="btn btn-primary" value="Submit">
		</div>
	</form>


@endsection