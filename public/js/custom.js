function ajaxGetModelsByManufacturer(location, token, selectedModel)
{
	var id = jQuery("#manufacturer option:selected").val();
	$.ajax({
	    method: 'POST', // Type of response and matches what we said in the route
	    url: location, // This is the url we gave in the route
	    data: {
		"_token": token,
		"id": id}, // a JSON object to send back
	    success: function(response)
	    { 
	 		var obj = $.parseJSON(response);
	 		populateCarModelDropDown(obj, selectedModel);
	        //console.log(obj); 
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    { // What to do if we fail
	        console.log(JSON.stringify(jqXHR));
	        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	    }
	});	
}

function populateCarModelDropDown(carModelArray, selectedModel)
{
	var htmlstring = "";
	for (i = 0; i < carModelArray.length; i++)
	{ 
		htmlstring += "<option value='" + carModelArray[i].id +"'";
		if(selectedModel != null)
		{
			if(carModelArray[i].id == selectedModel)
			{
				htmlstring += " selected " ;
			}
		}
		htmlstring += ">" + carModelArray[i].name +"</option>";
	}
	var select = $('#carmodelselector');
	select.empty().append(htmlstring);
}