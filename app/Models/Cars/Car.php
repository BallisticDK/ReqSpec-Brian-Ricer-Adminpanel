<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   	public function carModel()
   	{
   		return $this->belongsTo(CarModel::class);
   	}

   	public function manufacturer()
   	{
   		return $this->belongsTo(Manufacturer::class);
   	}

   	public function doesPictureExist($picturePath)
 	{
    	if(file_exists( public_path() . '/' . $picturePath)) 
    	{
        	return true;
    	}
    	else
    	{
    	    return false; 
   	  	}     
 	}
}
