@extends('layouts.master')
@section('content')

	<form method="POST" action="{{ route('cars.store') }} " enctype="multipart/form-data">
	<select name="manufacturer" id="manufacturer">
		@foreach($manufacturers as $manufacturer)
			<option value="{{$manufacturer->id}}">{{ $manufacturer->name }}</option>
		@endforeach
	</select>

	<select name="carmodel" id="carmodelselector"></select>
	<input type="number" name="ugliness" min="1" max="10" value="1">
	<input type="number" name="horsepower" min="1" value="50">
	<input type="file" name="carpicture">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
	</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).on('change', '#manufacturer', function()
 {
 	console.log("yeahsovs");
    	var id = jQuery("#manufacturer option:selected").val();
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '{{ route('retrive.models') }}', // This is the url we gave in the route
		    data: {
        	"_token": "{{ csrf_token() }}",
        	"id": id}, // a JSON object to send back
		    success: function(response)
		    { 
		 		var obj = $.parseJSON(response);
		 		populateCarModelDropDown(obj);
		        //console.log(obj); 
		    },
		    error: function(jqXHR, textStatus, errorThrown) 
		    { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});	
    });


	function populateCarModelDropDown(carModelArray)
	{
		var htmlstring = "";
		for (i = 0; i < carModelArray.length; i++)
		{ 
    		htmlstring += "<option value='" + carModelArray[i].id +"'>" + carModelArray[i].name +"</option>";
		}
		var select = $('#carmodelselector');
		select.empty().append(htmlstring);
		console.log(htmlstring);
	}
</script>

@endsection
