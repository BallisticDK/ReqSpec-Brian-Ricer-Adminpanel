@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('carmodels.store') }}">
	<input type="text" name="name">
	<select name="manufacturer">
		@foreach($manufacturers as $manufacturer)
			<option value="{{$manufacturer->id}}">{{ $manufacturer->name }}</option>
		@endforeach
	</select>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
	</form>


@endsection