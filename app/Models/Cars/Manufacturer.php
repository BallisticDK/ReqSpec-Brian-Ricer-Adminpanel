<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
	public function carModels($request)
	{
		if($request == "list") 
		{
			return $this->hasMany(CarModel::class);
		}
		else if ($request == "count") 
		{
			return $this->hasMany(CarModel::class)->count();
		}
		else 
		{
			return null;
		}
	}
}
