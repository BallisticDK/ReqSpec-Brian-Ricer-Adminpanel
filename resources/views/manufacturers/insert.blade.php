@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('manufacturers.store') }}">
	<input type="text" name="name">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
	</form>


@endsection