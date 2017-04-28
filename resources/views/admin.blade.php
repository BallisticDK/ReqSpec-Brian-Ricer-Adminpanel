@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					Cars 
					<div class="pull-right">
					<span class="badge" style="background-color: gray;" >{{$carCount}}</span>
					</div>
				</div>
				<div class="panel-body">
					<li><a href="">Insert car</a></li>
					<li><a href="{{ route('cars.all') }}">View all cars</a></li>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					Models 
					<div class="pull-right">
					<span class="badge" style="background-color: gray;">{{$carModelCount}}</span>
					</div>
				</div>
				<div class="panel-body">
					<li><a href="">Insert Model</a></li>
					<li><a href="{{ route('carmodels.all') }}">View all Models</a></li>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					Manufacturers 
					<div class="pull-right">
					 <span class="badge" style="background-color: gray;">{{$manufactuerCount}}</span>
					</div>
				</div>
				<div class="panel-body">
					<li><a href="">Insert Manufacturer</a></li>
					<li><a href="{{ route('manufacturers.all') }}">View all Manufacturers</a></li>
				</div>
			</div>
		</div>
	</div>
	<!--
	<ul class="list-group">
	  <li class="list-group-item">
	    <span class="badge">Count {{$carCount}}</span>
	    <a href="">Cars</a> 
	    <a href="" style="float:right;margin-right:20px;">Add car</a> 
	  </li>

	  <li class="list-group-item">
	    <span class="badge">Count {{$carModelCount}}</span>
	    <a href="">Models</a> 
	    <a href="" style="float:right;margin-right:20px;">Add Model</a> 
	  </li>

	  <li class="list-group-item">
	    <span class="badge">Count {{$manufactuerCount}}</span>
	    <a href="">Manufacturers</a> 
	    <a href="" style="float:right;margin-right:20px;">Add manufacturer</a> 
	  </li>
	</ul>
	
			<div class="admin-cars-panel">Cars <br> Count {{ $carCount }}</div>
		<div class="admin-manufacturer-panel"></div>
		<div class="admin-carmodel-panel"></div> -->

@endsection
