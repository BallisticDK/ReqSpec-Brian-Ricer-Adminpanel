@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('manufacturers.manufacturer.update', ['id' => $manufacturer->id]) }}">
	<input type="text" name="name" value="{{ $manufacturer->name }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
	</form>


@endsection