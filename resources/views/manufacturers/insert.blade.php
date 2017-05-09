@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('manufacturers.store') }}">
	<div class="form-group">
		<label for="manufacturername" class="control-label">Manufacturer name</label>
		<input required="required" type="text" class="form-control"  name="name">
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group"> 
		<input type="submit" class="btn btn-primary" value="Submit">
	</div>
	</form>


@endsection